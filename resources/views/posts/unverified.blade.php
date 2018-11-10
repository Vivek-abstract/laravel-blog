@extends('layouts.withnav')

@section('content')

    <div class="padding"></div>
    <div class="container" id="content">
        <div class="col-lg-8 col-md-8 mx-auto">

            @if (count($posts) == 0)
                <h4>No posts to show</h4>
            @else
                @foreach ($posts as $post)
                    @include('posts.post') 
                @endforeach
            @endif
            
        </div>
    </div>

@endsection