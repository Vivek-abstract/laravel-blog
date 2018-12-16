@extends('layouts.master') 
@section('hero-image')

<header class="masthead">
    <div class="jumbotron jumbotron-fluid vertical-center" style="background-image: url('{{ $post->image }}')">
        <div class="overlay"></div>
        <div class="container dont-overlay">
            <div class="inner-container text-center">
                <h3 class="display-4 heading">{{$post->title}}</h3>
                <p class="no-margin">{{$post->subtitle}}</p>
            </div>
        </div>
    </div>
</header>
<a href="#content"><i class="fas fa-angle-down fa-4x bottom dont-overlay"></i></a>

@endsection

@section('content')

<article>
    <div class="container" id="content">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! $post->body !!}
                <h4>- {{ $post->user->name }}</h4>
            </div>
        </div>
    </div>

</article>

<br>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            @if (count($post->comments))
                <h3>Comments</h3>

                @foreach ($post->comments as $comment)

                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>{{ $comment->user->name }}</strong><br> {{ $comment->body }} <br>
                            <small>{{ $comment->created_at->diffForHumans() }}</small>
                        </li>
                    </ul>

                @endforeach 
            
            @endif

            <br>
            @if (auth()->check())

                        <h5>Share your thoughts</h5>
                        <form method="POST" action="/posts/{{ $post->id }}/comments">
                            @csrf
                            <div class="form-group">
                                <textarea name="body" class="form-control" placeholder="Your comment here." required></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Comment</button>
                            </div>

                        </form>
                        @include('layouts.errors')

            @else

                <h5><a href="/login" class="link">Login</a> to share your thoughts on this article</h5>

            @endif

        </div>
    </div>
</div>
@endsection