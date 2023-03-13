<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', [ReviewController::class, 'index']);   
//Route::post('/', [CategoryController::class, 'index']);  
Route::get('/post/', [ItemsController::class ,'post']);

Route::get('/posts/post', [ItemsController::class ,'search']);
Route::get('/posts/create/', [ItemsController::class ,'register']);
Route::post('/cloudinary', [ItemsController::class, 'cloudinary_store']);
Route::get('/posts/create/{id}/', [ItemsController::class ,'create']);
Route::post('/posts/', [ItemsController::class, 'store']);
Route::post('/posts/review',[ItemsController::class,'store2']);
Route::get('/posts/show', [ItemsController::class ,'show']);
Route::get('/posts/show/{post}', [ItemsController::class ,'show2']);
Route::delete('/review/{id}/delete', [ItemsController::class,'delete']);
//idをitemsに？
Route::get('/review/{id}/edit', [ItemsController::class, 'edit']);
Route::put('/review/{id}/update', [ItemsController::class, 'update']);
