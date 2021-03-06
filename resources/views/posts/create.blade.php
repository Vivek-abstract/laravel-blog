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
                    <input type="text" class="form-control" id='title' name="title" value="{{ old('title') }}" required>
                </div>

                <div class="form-group">
                    <label for="title">Subtitle</label>
                    <input type="text" class="form-control" id='title' name="subtitle" value="{{ old('subtitle') }}" required>
                </div>

                <div class="form-group">
                    <label for="title">URL Title</label>
                    <input type="text" class="form-control" id='title' name="url_title" value="{{ old('url_title') }}" required>
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea id="mytextarea" name="body" id="body" rows='10'>{{ old('body') }}</textarea>
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