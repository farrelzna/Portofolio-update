<?php

use App\Http\Controllers\portofoliocontroller;
use Illuminate\Support\Facades\Route;
Route::get("/", function () {
    return view('index');
});

Route::get('/home', [portofoliocontroller::class, 'index']);
Route::get('/about', [portofoliocontroller::class, 'index']);
Route::get('/service', [portofoliocontroller::class, 'index']);
Route::get('/Portofolio', [portofoliocontroller::class, 'portofolio']);
Route::get('/Contact', [portofoliocontroller::class, 'contact']);