<?php

//Route::get('/tasks','TasksController@index');//ovo je poziv funkcije index da nam izlista sve

//Route::get('/tasks/{task}','TasksController@show'); //ovo je poziv preko idja da nam ispise

//Route::get('/posts/{post}');

Route::get('/','PostsController@index');

Route::get('/posts/{post}','PostsController@show');



Route::get('/blogy','BlogiesController@index')->name('home');

Route::get('/blogy/create','BlogiesController@create');

Route::get('/blogy/{post}','BlogiesController@show');

Route::post('/posts','BlogiesController@store');


Route::post('/blogy/{post}/comments', 'CommentsController@store');




Route::get('/register','RegistrationController@create');

Route::post('/register','RegistrationController@store');



Route::get('/login','SessionsController@create');

Route::get('/logout','SessionsController@destroy');
