<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\StockController;
use App\Http\Controllers\frontend\dashboardController;
use App\Http\Controllers\frontend\CartController;


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
Route::get('/', [dashboardController::class,'index']);








Route::get('/admin', function () {
    return view('backend.app');
})->middleware('can:isAdmin');;

route::resource('cart',CartController::class)->middleware('auth');

Route::prefix('admin')->group(function () 
{

route::resource('category',CategoryController::class)->middleware('can:isAdmin');
route::resource('products',ProductController::class)->middleware('can:isAdmin');
route::resource('stock',StockController::class)->middleware('can:isAdmin');

});
  













Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



