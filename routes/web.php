<?php

use App\Http\Controllers\CategoryController;
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
Route::get('test', [CategoryController::class, 'categories']);
Route::get('allcategories', [CategoryController::class, 'categories']);
Route::get('edit_cat', [CategoryController::class, 'edit_cat'])->name('edit_cat');
Route::get('delete_cat', [CategoryController::class, 'delete_cat'])->name('delete_cat');
Route::post('create', [CategoryController::class, 'create'])->name('create_cat');
Route::get('/', function () {
    return view('home');
});

Route::get('categories', function () {
    return view('categories');
});

Route::get('addcat', function () {
    return view('addcategory');
});

Route::get('unicat', function(){
    return view('unicategories');
});

Route::get('single', function(){
    return view('single');
});

Route::get('upload' , function(){
    return view('upload');
});

