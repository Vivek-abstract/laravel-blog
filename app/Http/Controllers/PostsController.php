<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Post;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::latest()->filter(request(['month', 'year']))->verified()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $this->authorize('view', $post);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        $this->authorize('create', Post::class);

        return view('posts.create');
    }

    public function store()
    {
        $this->authorize('create', Post::class);

        $this->validate(request(), [
            'title' => 'required',
            'subtitle' => 'required',
            'url_title' => 'required|unique:posts,url_title',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,bmp,png',
        ]);

        $path = request()->file('image')->store('post-images', 's3');
        $url = Storage::disk('s3')->url($path);

        $request = request(['title', 'subtitle', 'url_title', 'body']);
        $request['image'] = $url;

        auth()->user()->publish(new Post($request));

        session()->flash('message', 'Your post is under review and will be uploaded shortly.');

        \Mail::to('vivekbgawande@gmail.com')->send(new Contact([
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'body' => request('body'),
        ]));

        return redirect('/');
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post);

        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $this->authorize('update', $post);

        $this->validate(request(), [
            'title' => 'required',
            'subtitle' => 'required',
            'url_title' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,bmp,png',
        ]);

        if (request('image')) {
            $path = request()->file('image')->store('post-images', 's3', 'public');
            $url = Storage::disk('s3')->url($path);

            $post->update(request(['title', 'subtitle', 'url_title', 'body']) + ['image' => $url]);
        } else {
            $post->update(request(['title', 'subtitle', 'url_title', 'body']));
        }

        session()->flash('message', 'Post updated successfully');

        return redirect("/posts/$post->url_title");
    }

    public function destroy(Post $post)
    {
        $this->authorize('update', $post);

        $post->delete();

        session()->flash('message', 'Post deleted successfully');

        return redirect()->home();
    }

}
