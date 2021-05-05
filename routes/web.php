<?php

use App\Models\Product;
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

Route::get('/productos', function ($categoria = 'todas') {
    $productos = Product::where('available',true)->get();
    return view('components.products',compact('productos'));
});
