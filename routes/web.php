<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home.home');
});


Route::get('/contact', function () {
    return view('Contact.index');
});

Route::get('/account', function () {
    return view('Users.login');
});


Route::get('/signup', function () {
    return view('Users.signup');
});
