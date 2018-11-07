<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;

class CommentsController extends Controller
{
    public function store(Post $post)
    {

        $this->validate(request(), ['body' => 'required|min:2']);

        $post->addComment($post->id, request(['body']));

        session()->flash('message','Comment added successfully');

        return back();
    }
}
