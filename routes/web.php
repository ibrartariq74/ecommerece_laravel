<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\StockController;
use App\Http\Controllers\frontend\dashboardController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\backend\CustomerController;
use App\Http\Controllers\backend\OrderController;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;



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

    $category = category::count(); 
    $product = Product::count(); 
    $customer = User::count(); 
    $order = Order::count(); 
    $customer=$customer-1;

    return view('backend.index',compact('category','product','customer','order'));
})->middleware('can:isAdmin');;

route::resource('cart',CartController::class)->middleware('auth');

Route::prefix('admin')->group(function () 
{

route::resource('category',CategoryController::class)->middleware('can:isAdmin');
route::resource('products',ProductController::class)->middleware('can:isAdmin');
route::resource('stock',StockController::class)->middleware('can:isAdmin');
route::resource('customer',CustomerController::class)->middleware('can:isAdmin');
route::resource('order',OrderController::class)->middleware('can:isAdmin');


});
  













Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', function(){
    return view('frontend.blog');

})->name('blog');
Route::get('/about', function(){
    return view('frontend.about');

})->name('about');
Route::get('/contact', function(){
    return view('frontend.contact');

})->name('contact');
Route::get('/filter/{min}/{max}', [App\Http\Controllers\HomeController::class, 'filter'])->name('filter');


