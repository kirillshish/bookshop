<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\ContactsController;
use App\Http\Controllers\BasketController;

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

Route::get('/', [HomeController::class, 'show']);

Route::get('/contacts', [ContactsController::class, 'show'])->name('contacts');
Route::get('/book/{book}', [HomeController::class, 'book'])->name('books');
Route::get('/basket/{book}', [HomeController::class, 'basket'])->name('basket');
Route::post('/basket', [BasketController::class, 'addItem'])->name('basket_add');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
