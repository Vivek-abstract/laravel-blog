@extends('layouts.master') 
@section('hero-image')

<header class="masthead" style="background-image: url('/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Create post</h1>
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
            <form method="POST" action="/posts">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id='title' name="title" required>
                </div>

                <div class="form-group">
                    <label for="title">Subtitle</label>
                    <input type="text" class="form-control" id='title' name="subtitle">
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" id="body" class="form-control" rows="10" required></textarea>
                </div>

                <br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                @include('layouts.errors')
            </form>
        </div>
    </div>
</div>
@endsection