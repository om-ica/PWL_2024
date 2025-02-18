<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello', [WelcomeController::class,'hello']); 

Route::get('/world', function () {
    return 'World';
});

Route::get('/welcome', [WelcomeController::class,'index']);

Route::get('/about', [WelcomeController::class,'about']);

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id?}', [WelcomeController::class,'articles']);

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya  '.$name;
});

Route::get('/user/{name?}', function ($name='Jhon') {
    return 'Nama saya  '.$name;
});

Route::get('/home', HomeController::class);
Route::get('/about', AboutController::class);
Route::get('/articles/{id?}', ArticleController::class);

Route::resource('photos', PhotoController::class);
