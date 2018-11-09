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
            <h1>Hello</h1>
            <p>I am a student studying Computer Engineering from 
                Shah And Anchor Kutchhi Engineering College. I like developing 
                software that has an impact on people's lives. I like learning 
                new things and improving my knowledge everyday.</p>
            <p>I like playing Chess and listening to music in my free time. I'm 
                a huge food lover (who isn't?). I also like teaching other people 
                how to code. I recently gave a hands on workshop on Android 
                development using the Ionic Framework to over 40 students.</p>
            <h2 class="mb-3">My Favourite Quotes</h2>
            <ul>
                <li>Everything was impossible until someone did it.</li>
                <li>If it is to be, it's upto me</li>
                <li>Be who you are and say what you feel cause' those who mind 
                    don't matter, and those who matter, don't mind</li>
            </ul>
        </div>
    </div>
</div>

@endsection