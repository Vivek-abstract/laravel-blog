<?php

Route::get('/', 'PostsController@index');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/posts/{post}', "PostsController@show");
