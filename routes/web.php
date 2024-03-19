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
    return view('pages.home');
});
Route::get('/layanan-digital/', function () {
    return view('pages.layanan-digital');
})->name('layanan-digital');

Route::get('/auth/login/', function () {
    return view('pages.auth.login');
});

Route::get('/auth/news/', function () {
    return view('pages.auth.news.index');
})->name('news.auth');
Route::get('/auth/news/create/', function () {
    return view('pages.auth.news.create');
})->name('news.create');

Route::get('/auth/events/', function () {
    return view('pages.auth.event.index');
})->name('event.auth');

Route::get('/auth/users/', function () {
    return view('pages.auth.user.index');
});
