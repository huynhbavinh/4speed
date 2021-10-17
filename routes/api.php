<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MotoCyclesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('article', [MotoCyclesController::class,'APIpassdata']);
Route::post('article', [MotoCyclesController::class,'store']);
Route::get('article/{id}', [AdminController::class,'APIpassArticle']);
Route::post('article/{id}', [MotoCyclesController::class,'update']);



Route::post('upload-thumbnail', [MotoCyclesController::class,'uploadImage'])->name('userUploadImg');