<?php

namespace App\Http\Controllers;
use GrahamCampbell\Markdown\Facades\Markdown;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::first()->get();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        $content = Markdown::convertToHtml($post->body);
        return view('posts.show', compact('post', 'content'));
    }
}
