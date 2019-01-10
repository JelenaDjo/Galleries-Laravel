<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:api']], function() {
    Route::post('/galleries/{id}/comment', 'CommentController@addComment');
    Route::post('/gallery', "GalleryController@addGallery"); // metodu u modelu jos  dodavanje 



});

Route::get('/galleries', 'GalleryController@getAllGalleries');
Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');





