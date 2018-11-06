@extends('layouts.master') 
@section('hero-image')
<header class="masthead" style="background-image: url('/img/post-images/{{ $post->image }}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>{{ $post->title }}</h1>
                    <span class="subheading">{{ $post->subtitle }}</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection
 
@section('content')

<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?php echo $content ?>
            </div>
        </div>
    </div>

</article>

<hr>

<div class="col-lg-8 col-md-10 mx-auto">

    @if (count($post->comments))

    <h3>Comments</h3>
    @foreach ($post->comments as $comment)

    <ul class="list-group">
        <li class="list-group-item">
            <strong>{{ $comment->created_at->diffForHumans() }}</strong>&nbsp; {{ $comment->body }}
        </li>
    </ul>

    @endforeach @endif

    <hr>

    <div class="card">
        <div class="card-block">
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
</div>
@endsection