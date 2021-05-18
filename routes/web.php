<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MoreController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Routing\Route as RoutingRoute;
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

Route::get('/', function () {
    // return view('welcome');
});

// Route::get('/pruebaProductos', function () {
//     // return view('welcome');
//     $product1 = Product::find(1);
//     dd($product1)->categories;
// });

// Route::get('/productos', function ($categoria = 'todas') {
//     $productos = Product::where('available',true)->get();
//     return view('components.products',compact('productos'));
// });

Route::resource('products', ProductController::class);
Route::resource('more', MoreController::class);
Route::resource('cart', CartController::class);
Route::resource('image', ImageController::class);
Route::get('cart/addOne/{product}', [CartController::class, 'addOne'])->name('cart.addOne');
Route::get('more/filterStar/{calification}', [MoreController::class, 'filterStar'])->name('more.filterStar');
Route::resource('order', OrderController::class);
Route::resource('user', UserController::class);
Route::get('cart/cleancart', [CartController::class, 'cleancart'])->name('cart.cleancart');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';