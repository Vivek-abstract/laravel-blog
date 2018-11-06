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
        ]);

        auth()->user()->publish(new Post(request(['title', 'subtitle','body'])));

        return redirect('/');
    }
}
