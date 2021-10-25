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
Route::get('article', [MotoCyclesController::class,'APIpassdata']); //API categories for edit and create article
Route::post('article', [MotoCyclesController::class,'store']);
Route::get('article/{id}', [AdminController::class,'APIpassArticle']);
Route::post('article/{id}', [MotoCyclesController::class,'update']);
Route::post('article/{id}/deleted', [MotoCyclesController::class,'destroy']);
Route::post('restore/{id}',[MotoCyclesController::class,'restore']);
Route::get('admin/article', [AdminController::class,'APIadminGetAllMoto']);
Route::get('admin/article/{article}', [AdminController::class,'show']);
//user API
Route::get('admin/user/', [AdminController::class,'APIadminGetAllUser']);


Route::post('upload-thumbnail', [MotoCyclesController::class,'uploadImage'])->name('userUploadImg');