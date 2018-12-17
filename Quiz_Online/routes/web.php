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
    return view('welcome');
});

Route::get('header', function () {
    return view('layouts.header');
});

Route::get('footer', function () {
    return view('layouts.footer');
});

// Partners page
// Route::get('partners', function () {
//     return view('layouts.front-end.partner');
// });

Route::get('partners/{type}', ['as'=>'parner',
    'uses'=>'PageController@getPartners'
]);
// New page
// Route::get('news', function () {
//     return view('layouts.front-end.news');
// });
Route::get('news', ['as'=>'news',
    'uses'=>'PageController@getNews'
]);

// Register page
Route::get('register', function () {
    return view('layouts.front-end.register');
});

// Contact page
Route::get('contact', function () {
    return view('layouts.front-end.contact');
});

// Testing page
Route::get('test', function () {
    return view('layouts.front-end.test');
});
Route::get('header', function () {
    return view('layouts.header');
});
Route::get('footer', function () {
    return view('layouts.footer');
});
Route::get('index', function () {
    return view('layouts.front-end.index');
});