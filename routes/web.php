<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\categoryfetch;
use App\Http\Controllers\productController;
use App\Http\Controllers\sendcategory;
use App\Http\Controllers\sendeditproduct;

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

/* Route::get('/', function () {
    return view('index');
}); */

 Route::get('/test', function () {
    return view('test');
}); 


Route::resource('category',App\Http\Controllers\categoryController::class);
//This category mean, the path of the page or controller output example: /index load into index.blae.php file, 
//bcz the productController index function return index.blade.php file.

Route::resource('product',App\Http\Controllers\productController::class);

Route::get('addnewproduct', [sendcategory::class, 'index']);
Route::get('editproduct', [sendeditproduct::class, 'index']);
