@extends('layouts.master') 
@section('hero-image')

<header class="masthead">
    <div class="jumbotron jumbotron-fluid" style="background-image: url('/img/post-images/{{$post->image}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="site-heading">
                <h1 class="display-4 heading">{{$post->title}}</h1>
                <p>{{$post->subtitle}}</p>
            </div>
        </div>
    </div>
</header>
<a href="#content"><i class="fas fa-angle-down fa-4x bottom"></i></a>

@endsection
 
@section('content')

<article>
    <div class="container" id="content">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php echo $content ?>
                <h4>- {{ $post->user->name }}</h4>
            </div>
        </div>
    </div>

</article>

<hr>


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

            @endforeach @endif


            <hr> @if (auth()->check())

            <div class="card">
                <div class="card-block">
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
                </div>
            </div>

            @else

            <h5><a href="/login" class="link">Login</a> to share your thoughts on this article</h5>

            @endif

        </div>
    </div>
</div>
@endsection