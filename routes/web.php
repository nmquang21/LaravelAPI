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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/upload/images', [
    'uses'   =>  'ImageUploadController@uploadImages',
    'as'     =>  'uploadImage'
]);
Route::get('/upload',function (){
    return view('upload');
});
Route::get('/list-free-song','SongController@getFreeSong');
Route::post('/upload-free-song','SongController@uploadFreeSong');
Route::resource('song','SongController1');
