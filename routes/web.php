<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('products', [HomeController::class, 'productList'])->name('products.list');
Route::get('home', [HomeController::class, 'home'])->name('home');
Route::get('home/{product}', [HomeController::class, 'viewProduct']);

Route::get('k100', [HomeController::class, 'k100'])->name('k100');
Route::get('k96', [HomeController::class, 'k96'])->name('k96');
Route::get('k80', [HomeController::class, 'k80'])->name('k80');
Route::get('k75', [HomeController::class, 'k75'])->name('k75');
Route::get('k60', [HomeController::class, 'k60'])->name('k60');
Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('blog1', [HomeController::class, 'blog1'])->name('blog1');
Route::get('blog2', [HomeController::class, 'blog2'])->name('blog2');
Route::get('blog3', [HomeController::class, 'blog3'])->name('blog3');

// Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
// Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
// Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    

    Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
    Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
    Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
    Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
    Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
    Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');

});
//test-------------
// Route::get('/k100Dashboard',[K100Controller::class, 'index'])->name('k100Dashboard');
// Route::get('/k100',[K100Controller::class, 'addK100']);
// Route::get('/k100/{k100}',[K100Controller::class, 'editK100']);
// Route::post('/k100',[K100Controller::class, 'createK100']);
// Route::post('/k100/{k100}',[K100Controller::class, 'updateK100']);
//test ends-----------------
 
// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('home');
// })->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->group(function(){
//     Route::get('/k100Dashboard',[K100Controller::class, 'index'])->name('k100Dashboard');
// });







// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


require 'admin.php';