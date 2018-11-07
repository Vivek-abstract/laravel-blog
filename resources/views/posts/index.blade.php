@extends('layouts.master') 
@section('hero-image')

<header class="masthead">
    <div class="jumbotron jumbotron-fluid" style="background-image: url('/img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="site-heading">
                <h1 class="display-4 heading">Vivek's Blog</h1>
                <p>A place to share some knowledge </p>
            </div>
        </div>
    </div>
</header>
<a href="#content"><i class="fas fa-angle-down fa-4x bottom"></i></a>
@endsection
 
@section('content')
<div class="container" id="content">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach ($posts as $post)
    @include('posts.post') @endforeach
        </div>
    </div>
</div>
@endsection