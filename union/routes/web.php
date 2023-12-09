<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/page1', function () {
    return view('page1');
})->name('page1');

Route::get('/page2', function () {
    return view('page2');
})->name('page2');
Route::get('page3', function () {
    return view('page3');
})->name('page3');
Route::get('page4', function () {
    return view('page4');
})->name('page4');

Route::get('page5', function () {
    return view('page5');
})->name('page5');

Route::prefix('admin')->group(function () {

    Route::get('/login', function () {
        return view('admin.index');
    })->name('login');

    Route::get('/event', function () {
        return view('admin.event');
    })->name('event');

    Route::get('/instractor', function () {
        return view('admin.instractor');
    })->name('instractor');

    Route::get('/post', function () {
        return view('admin.post');
    })->name('post');
});
