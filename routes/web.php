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

Route::get('/', [App\Http\Controllers\MiniBlogController::class, 'index']);
Route::get('/addblog', [App\Http\Controllers\MiniBlogController::class, 'get_addblogs'])->middleware('auth');
Route::get('/myblog/{email}', [App\Http\Controllers\MiniBlogController::class, 'myblogs'])->middleware('auth');
Route::get('/blog_detail/{id}', [App\Http\Controllers\MiniBlogController::class, 'blogdetail']);
Route::get('/myblog/edit_blog/{id}', [App\Http\Controllers\MiniBlogController::class, 'get_edit_blogdetail'])->middleware('auth');



Route::post('/addmyblog',[App\Http\Controllers\MiniBlogController::class, 'post_addblogs'])->middleware('auth');
Route::post('/myblog/edit_blog/{id}', [App\Http\Controllers\MiniBlogController::class, 'post_edit_blogdetail'])->middleware('auth');

Route::get('/myblog/delete_blog/{id}',[App\Http\Controllers\MiniBlogController::class, 'delete_blogs'])->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();