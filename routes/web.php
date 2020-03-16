<?php

use Illuminate\Support\Facades\Route;

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



// banner
Route::get('/Banner', 'BannerController@index');



// About
Route::get('/About', 'AboutController@index');






// Event
Route::get('/Event', 'EventController@index');






// Story
Route::get('/Story','StoryController@index');





// Gallery
Route::get('/Gallery', 'GalleryController@index');





// Pesan
Route::get('/Message', 'MessageController@index');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
