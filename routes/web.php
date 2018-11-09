<?php

Route::get('/', 'PostsController@index')->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', 'ContactsController@index');

Route::post('/contact', "ContactsController@store");

Route::get('/posts/create', "PostsController@create");

Route::get('/posts/{post}', "PostsController@show");

Route::post('/posts', "PostsController@store");

Route::post('/posts/{post}/comments', "CommentsController@store");

Route::get('/posts/{post}/edit', 'PostsController@edit');

Route::patch('/posts/{post}', 'PostsController@update');

Route::delete('/posts/{post}', 'PostsController@destroy');

Route::get('/register', 'RegistrationsController@create');

Route::post('/register', 'RegistrationsController@store');

Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');