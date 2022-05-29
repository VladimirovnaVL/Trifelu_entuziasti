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

Route::controller(PostController::class)->group(function () {
    Route::prefix('posts')->group(function () {
        Route::get('/', 'index')->name('posts.index');
        Route::get('/create', 'create');
        Route::post('/create', 'store')->name('posts.create');
        Route::get('/show/{post}', 'show')->name('posts.show');
        Route::get('/edit/{post}', 'edit')->name('posts.edit');
        Route::post('/edit/{post}', 'update');
        Route::get('/delete/{post}', 'destroy')->name('posts.delete');

    });
});



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/kas_ir_trifeles', function () {
    return view('kas_ir_trifeles');
})->name('kas_ir_trifeles');

Route::get('/trifelu_fakti', function () {
    return view('trifelu_fakti');
})->name('trifelu_fakti');