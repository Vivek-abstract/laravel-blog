@extends('layouts.withnav') 
@section('content')

<div class="padding"></div>

<div class="container">
    <div class="row">
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1>Create Post</h1>

            <hr>
            <form method="POST" action="/posts" enctype="multipart/form-data">
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

                <div class="form-group">
                    <label for="image">Banner</label>
                    <input type="file" class="form-control-file" name="image" required>
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