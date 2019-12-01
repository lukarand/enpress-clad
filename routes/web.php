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
    return view('home');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/event-detail/{slug}', function () {
    return view('event');
});

Route::get('/professional-services', function () {
    return view('professional-services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/about/our-approach', function () {
    return view('our-approach');
});

Route::get('/about/our-team', function () {
    return view('our-team');
});

Route::get('/nationally-recognised-training', function () {
    return view('nationally-recognised-training');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/news', function () {
    return view('news');
});

Route::get ('/{page}/', 'PagesController@page');