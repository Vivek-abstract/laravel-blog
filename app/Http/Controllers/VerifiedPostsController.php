<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class VerifiedPostsController extends Controller
{
    public function index()
    {
        $this->authorize('verify', Post::class);
        $posts = Post::latest()->filter(request(['month', 'year']))->unVerified()->get();
        return view('posts.unverified', compact('posts'));
    }

    public function store(Post $post)
    {
        $this->authorize('verify', $post);

        $post->verified = 1;
        $post->save();

        session()->flash('message', 'Post activated successfully');

        return redirect()->home();
    }
}
