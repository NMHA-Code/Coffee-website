<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayoutDefault;
use App\Http\Controllers\Products;
use Illuminate\Support\Facades\Route;


// Route Default
Route::get('/',[LayoutDefault::class,'index']);
// Router Login
Route::get('/login', function () {
    return 'Login nhe';
});

// Router Dashboard
Route::get("/dashboard", [DashboardController::class , 'index']);

// // Router Users
Route::get('/users', function () {
    return 'xin chao users nhe';
});
// Router Categories
Route::get('/categories', function () {
    return 'xin chao categories nhe';
});
// Router Products
Route::get('/products', [Products::class, 'index']);
// Router Inventorys
Route::get('/invantorys', function () {
    return 'xin chao inventorys nhe';
});
// Router Orders
Route::get('/orders', function () {
    return 'xin chao orders nhe';
});
// Router Orders_item
Route::get('/orders_item', function () {
    return 'xin chao orders nhe';
});
// Router Suppliers
Route::get('/suppliers', function () {
    return 'xin chao suppliers nhe';
});
