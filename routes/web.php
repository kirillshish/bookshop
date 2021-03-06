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

Route::get('/', [HomeController::class, 'show']); // todo index
Route::get('/contacts', [ContactsController::class, 'show'])->name('contacts'); // todo has no
Route::get('/book/{book}', [HomeController::class, 'book'])->name('books'); // todo change controller
Route::get('/basket/{book}', [HomeController::class, 'basket'])->name('basket'); // todo change controller
Route::post('/basket', [BasketController::class, 'addItem'])->name('basket_add'); // todo 1) change name 2)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); // todo check and remove if need


require __DIR__ . '/auth.php';
