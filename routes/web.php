<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\ItemsController;
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

Route::get('/', [CategoryController::class, 'index']);   
Route::post('/', [CategoryController::class, 'index']);  
Route::get('/post/', [ItemsController::class ,'post']);

Route::get('/posts/post', [ItemsController::class ,'search']);
Route::get('/posts/create/', [ItemsController::class ,'register']);
Route::get('/posts/create/{id}/', [ItemsController::class ,'create']);
Route::post('/posts/', [ItemsController::class, 'store']);
Route::post('/posts/review',[ItemsController::class,'store2']);
Route::get('/posts/show', [ItemsController::class ,'show']);
Route::get('/posts/show/{post}', [ItemsController::class ,'show2']);