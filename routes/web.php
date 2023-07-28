<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCTL;
use App\Http\Controllers\Front;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/', [ProductCTL::class, 'index'])->name('index');
//Route::get('/create', [ProductCTL::class, 'create'])->name('create');
//Route::get('/show/{id}', [ProductCTL::class, 'show'])->name('show');
//Route::get('/edit/{id}', [ProductCTL::class, 'edit'])->name('edit');
//Route::post('/update/{id}', [ProductCTL::class, 'update'])->name('update');
//Route::post('/store', [ProductCTL::class, 'store'])->name('store');
//Route::post('/delete/{id}', [ProductCTL::class, 'destroy'])->name('delete');
//Route::get('/books', [BookController::class, 'index'])->name('index');
//Route::get('/books/search', [BookController::class, 'search'])->name('books.search');
//Route::get('/search',[BookController::class,'search']);
//
Route::get('/',[Front\HomeController::class, 'index']);


Route::prefix('shop')->group(function () {
    Route::get('/shop/product/{id}', [Front\ShopController::class,'show']);
    Route::post('/shop/product/{id}',[Front\ShopController::class,'postComment']);
    Route::get('/', [Front\ShopController::class, 'index']);
    Route::get('/{categoryName', [Front\ShopController::class, 'category']);
});

Route::prefix('cart')->group(function () {
    Route::get('add/{id}', [Front\CartController::class, 'add']);
    Route::get('/', [Front\CartController::class, 'index']);
    Route::get('delete/{rowId}', [Front\CartController::class, 'delete']);
    Route::get('destroy', [Front\CartController::class, 'destroy']);
    Route::get('/update', [Front\CartController::class, 'update'] );
});
Route::prefix('checkout')->group(function () {
    Route::get('/', [Front\CheckOutController::class, 'index']);
    Route::post('/', [Front\CheckOutController::class, 'addOrder']);
    Route::get('/vnPayCheck', [Front\CheckOutController::class, 'vnPayCheck']);
    Route::get('/result', [Front\CheckOutController::class, 'result']);

});

