<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Post;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        $this->middleware('verified-post')->only('show');
        $this->middleware('admin')->only(['showUnverified', 'verify']);
        $this->middleware('author')->only(['edit', 'update', 'destroy']);
    }

    public function index()
    {
        $posts = Post::latest()->filter(request(['month', 'year']))->verified()->get();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        $content = Markdown::convertToHtml($post->body);
        return view('posts.show', compact('post', 'content'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,bmp,png',
        ]);

        $path = request()->file('image')->store('post-images', 's3');
        $url = Storage::disk('s3')->url($path);

        $request = request()->all();
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
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $this->validate(request(), [
            'title' => 'required',
            'subtitle' => 'required',
            'body' => 'required',
            'image' => 'image|mimes:jpeg,bmp,png',
        ]);

        if (request('image')) {
            $path = request()->file('image')->store('my-file', 's3', 'public');
            $url = Storage::disk('s3')->url($path);

            $post->update(request(['title', 'subtitle', 'body']) + ['image' => $url]);
        } else {
            $post->update(request(['title', 'subtitle', 'body']));
        }

        session()->flash('message', 'Post updated successfully');

        return redirect("/posts/$post->id");
    }

    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('message', 'Post deleted successfully');

        return redirect()->home();
    }

    public function showUnverified()
    {
        $posts = Post::latest()->filter(request(['month', 'year']))->unVerified()->get();
        return view('posts.unverified', compact('posts'));
    }

    public function verify(Post $post)
    {
        $post->verified = 1;
        $post->save();

        session()->flash('message', 'Post activated successfully');

        return redirect()->home();
    }
}
