@extends('layouts.master')

@section('hero-image')
<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
            <h1>Vivek's Blog</h1>
            <span class="subheading">A place to share some knowledge</span>
            </div>
        </div>
        </div>
    </div>
</header>

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach ($posts as $post)
                @include('posts.post') 
            @endforeach
        </div>
    </div>
</div>
@endsection
