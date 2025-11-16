<?php

use App\Http\Controllers\LayoutDefault;
use Illuminate\Support\Facades\Route;


// Route Default
Route::get('/',[LayoutDefault::class,'index']);
// Router Login
Route::get('/login', function () {
    return 'Login nhe';
});
// Router Users
Route::get('/users', function () {
    return 'xin chao users nhe';
});
// Router Categories
Route::get('/categories', function () {
    return 'xin chao categories nhe';
});
// Router Products
Route::get('/products', function () {
    return 'xin chao products nhe';
});
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
