<?php



Route::get('/', function () {
    return view('pages/home');
})->name('app_root');


Route::get('/about-us', function () {
    return view('pages/about');
})->name('app_about');