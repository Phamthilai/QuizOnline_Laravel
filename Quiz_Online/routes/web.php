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

//Time Quiz online
Route::get('time', function () {
    return view('layouts.front-end.time_quiz_online');
});
// Partners page

Route::get('partners/{type}', ['as'=>'parner',
    'uses'=>'PageController@getPartners'
]);
// New page

Route::get('news', ['as'=>'news',
    'uses'=>'PageController@getNews'
]);
Route::get('newsdetail/{id}', ['as'=>'newsdetails',
    'uses'=>'PageController@getNews_detail'
]);

Route::get('register',['as'=>'register', 'uses'=>'RegisterController@getRegister']);
Route::post('register',['as'=>'register', 'uses'=>'RegisterController@postRegister']);

// Contact page
Route::get('contact',
[
'uses'=>'ContactController@create'
]);
Route::post('contact',
[
'as'=>'contact.store',
'uses'=>'ContactController@store'
]);

// Testing page
// Route::get('test', function () {
//     return view('layouts.front-end.test');
// });
Route::get('header', function () {
    return view('layouts.header');
});
Route::get('footer', function () {
    return view('layouts.footer');
});
Route::get('index', function () {
    return view('layouts.front-end.index');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// Create topic
Route::get('topic',
[
'as'=>'topic.store',
'uses'=>'ContactController@TopicCreate'
]);
Route::post('topic',
[
'as'=>'topic.store',
'uses'=>'ContactController@TopicStore'
]);


















//Login

Route::post('login',[
    'as'=>'login',
    'uses'=>'LoginController@postLogin'
]);
Route::get('logout',[
    'as'=>'logout',
    'uses'=>'LoginController@getLogout'
]);

//Header
Route::get('index',[
    'as'=>'home',
    'uses'=>'HeaderController@getIndex'
]);































































































































































































Route::get('test/{id}',['as'=>'tests', 'uses'=>'TestController@getTest']);
////id_code
Route::post('id_codes',[
    'as'=>'id_code',
    'uses'=>'PageController@postIdCode'
]);

Route::get('infor',['as'=>'infor', 'uses'=>'TestController@getTopic']);
//student result 
Route::get('student_result/{id_top}',['as'=>'student_results', 'uses'=>'TestController@postStudent_resul']);























































































































































































































Route::get('results',['as'=>'resultss', 'uses'=>'TestController@getResult']);
////id_code








