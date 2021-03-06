@extends('layouts.withnav') 
@section('content')

<div class="padding"></div>

<div class="container">
    <div class="row">
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1>Edit Post</h1>

            <hr>
            <form method="POST" action="/posts/{{ $post->url_title }}" enctype="multipart/form-data">

                @method('PATCH') 
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id='title' name="title" value="{{ $post->title }}" required>
                </div>

                <div class="form-group">
                    <label for="title">Subtitle</label>
                    <input type="text" class="form-control" id='title' name="subtitle" value="{{ $post->subtitle }}">
                </div>

                <div class="form-group">
                    <label for="title">URL Title</label>
                    <input type="text" class="form-control" id='title' name="url_title" value="{{ $post->url_title }}">
                </div>


                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea id="mytextarea" name="body" id="body" rows='10'>{{ $post->body }}</textarea>
                </div>

                <img src="{{ $post->image }}" class="img-fluid" alt="Post Banner">

                <div class="form-group">
                    <label for="image">Banner</label>
                    <input type="file" class="form-control-file" name="image">
                </div>

                <br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Post</button>
                </div>


            </form>

            <form action="/posts/{{ $post->url_title }}" method="post">
                @method('DELETE')
                @csrf 

                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Delete Post</button>
                </div>
            </form>

            @if (auth()->user()->isAdmin())
                
                <form action="/verify/{{ $post->url_title }}" method="post">
                    @csrf 

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Activate Post</button>
                    </div>
                </form>

            @endif

            @include('layouts.errors')
        </div>
    </div>
</div>
@endsection