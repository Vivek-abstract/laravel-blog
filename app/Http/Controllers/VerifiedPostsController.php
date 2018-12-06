<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class VerifiedPostsController extends Controller
{

    public function __construct() {
        $this->middleware('admin');
    }

    public function index()
    {
        $posts = Post::latest()->filter(request(['month', 'year']))->unVerified()->get();
        return view('posts.unverified', compact('posts'));
    }

    public function store(Post $post) {
        $post->verified = 1;
        $post->save();

        session()->flash('message', 'Post activated successfully');

        return redirect()->home();
    }
}
