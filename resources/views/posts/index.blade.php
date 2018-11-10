@extends(request('month') ? 'layouts.withnav' : 'layouts.master') 

@if (!request('month'))
    
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
 
@endif

@section('content')

    @if (request('month'))    
        <div class="padding"></div>
    @endif
    <div class="container" id="content">
        <div class="col-lg-8 col-md-8 mx-auto">

            @if (count($posts) == 0)
                <h4>No posts to show</h4>
            @else
                @if (request('month') || request('year'))
                    <h4>Posts from {{ request('month') }}, {{ request('year') }}</h4>
                    <hr>
                @endif 
                
                @foreach ($posts as $post)
                    @include('posts.post') 
                @endforeach
            @endif
            
        </div>
    </div>

@endsection