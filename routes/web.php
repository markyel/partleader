<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('about', [AboutController::class, 'index'])->name('about.index');
Route::get('/', [AboutController::class, 'start'])->name('start.index');
Route::get('/product', [AboutController::class, 'product'])->name('product.index');
Route::get('/delivery', [AboutController::class, 'delivery'])->name('delivery.index');
Route::get('/guarantee', [AboutController::class, 'guarantee'])->name('guarantee.index');
Route::get('/docs', [AboutController::class, 'docs'])->name('docs.index');
Route::get('/partner', [AboutController::class, 'partner'])->name('partner.index');
