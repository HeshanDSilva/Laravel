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
    return view('Home');
});

Route::get('file-upload', 'FileController@fileUpload');

Route::post('file-upload', 'FileController@fileUploadPost')->name('fileUploadPost');

Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/About', function () {
    return view('About');
});
Route::post('/Contact/submit','MessagesController@Submit');

Route::get('/Messages','MessagesController@getMessages');
