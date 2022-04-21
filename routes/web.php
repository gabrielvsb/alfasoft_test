<?php

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
    return redirect('/index');
});

Route::get('/index', [ContactController::class, 'index'])->name('contact.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
    Route::get('/contact/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::get('/contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');
    Route::get('/contact/detail/{id}', [ContactController::class, 'detail'])->name('contact.detail');
    Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
    Route::post('/contact/update', [ContactController::class, 'update'])->name('contact.update');
    Route::post('/contact/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
