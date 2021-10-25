<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotoCyclesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FamousPeopleController;

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

Route::group(['prefix'=>'home','middleware'=>['auth','checkBlock']],function(){
    Route::resource('sanpham', MotoCyclesController::class)->names('homeSanpham');
    
    //Route::post('upload-thumbnail', [UserArticleController::class,'uploadImage'])->name('userUploadImg');
});
Route::group(['prefix'=>'user','middleware'=>['auth','checkBlock','role:user']],function(){
    //Route::get('profile',[UserController::class,'show'])->name('user.profile');
    //Route::post('upload-thumbnail', [UserArticleController::class,'uploadImage'])->name('userUploadImg');
    Route::resource('profile', UserController::class)->names('userProfile');

});
//'middleware'=>['auth','checkBlock','role:admin']
Route::group(['prefix'=>'admin'],function(){
    Route::resource('article', AdminController::class)->names('admin');
    
});
Route::post('like',[CommentController::class,'likeVote'])->name('liked');
Route::post('post',[CommentController::class,'store'])->name('postComment');
Route::post('favorite',[UserController::class,'addFavorite'])->name('favorite');
Route::get('discover',[FamousPeopleController::class,'index'])->name('discover');







