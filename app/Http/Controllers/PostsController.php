<?php

namespace App\Http\Controllers;

use App\Post;
use GrahamCampbell\Markdown\Facades\Markdown;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {

        $posts = Post::latest()->filter(request(['month', 'year']))->get();

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

        $file = request()->file('image');
        $name = $file->getClientOriginalName();
        $file->move('img/post-images', $name);

        $request = request()->all();
        $request['image'] = $name;

        auth()->user()->publish(new Post($request));

        session()->flash('message', 'Post created successfully');

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
            $file = request()->file('image');
            $name = $file->getClientOriginalName();
            $file->move('img/post-images', $name);

            $post->update(request(['title', 'subtitle', 'body']) + ['image' => $name]);
        } else {
            $post->update(request(['title', 'subtitle', 'body']));
        }

        session()->flash('message', 'Post updated successfully');

        return redirect('/');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        session()->flash('message', 'Post deleted successfully');

        return redirect()->home();
    }
}
