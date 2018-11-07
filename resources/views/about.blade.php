@extends('layouts.master') 
@section('hero-image')
<header class="masthead">
    <div class="jumbotron jumbotron-fluid" style="background-image: url('/img/about-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="site-heading">
                <h1 class="display-4 heading">About Me</h1>
                <p>Who am I?</p>
            </div>
        </div>
    </div>
</header>
<a href="#content"><i class="fas fa-angle-down fa-4x bottom"></i></a>

@endsection
 
@section('content')

<div class="container" id="content">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit,
                fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error,
                repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus,
                minus!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid ex itaque
                esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit tempora!</p>
        </div>
    </div>
</div>

<hr>
@endsection