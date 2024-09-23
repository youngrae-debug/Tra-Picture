<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // 나중에 포트폴리오 홈페이지로 변경할 예정
});

Route::get('/about', function () {
    return view('about'); // About 페이지
});

Route::get('/contact', function () {
    return view('contact'); // Contact 페이지
});

Route::get('/products', function () {
    return view('products'); // products 페이지
});

// 제품 상세 페이지 (각 제품에 맞는 ID를 전달)
Route::get('/products/{id}', function ($id) {
    return view('product-detail', ['id' => $id]);
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

