<?php

namespace App\Http\Controllers;

use App\Post;
use GrahamCampbell\Markdown\Facades\Markdown;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', [
            'posts' => $posts,
        ]);
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
        ]);

        Post::create(request(['title', 'subtitle', 'body']));

        return redirect('/');
    }
}
