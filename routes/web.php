<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoCyclesController;
use App\Http\Controllers\CommentController;

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
})->name('welcome');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'home','middleware'=>['auth']],function(){
    Route::resource('sanpham', MotoCyclesController::class)->names('homeSanpham');
    //Route::post('upload-thumbnail', [UserArticleController::class,'uploadImage'])->name('userUploadImg');
});
Route::post('like',[CommentController::class,'likeVote'])->name('liked');
Route::post('post',[CommentController::class,'store'])->name('postComment');

