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

@endsection
