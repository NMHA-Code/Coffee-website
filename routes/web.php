<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayoutDefault;
use App\Http\Controllers\Orders;
use App\Http\Controllers\Orders_item;
use App\Http\Controllers\Products;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;


// Route Default
Route::get('/',[LayoutDefault::class,'index']);
// Router Login
// Route::get('/login', function () {
//     return 'Login nhe';
// });

// Router Dashboard
Route::get("/dashboard", [DashboardController::class , 'index']);

// // Router Users
// Route::get('/users', [Users::class, "index"]);
// Route::get('/users/create', [Users::class, "create"]);
// Route::post('/users', [Users::class, "createPost"]);
Route::resource("/users", Users::class);
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
Route::get('/orders_item', [Orders::class, 'index']);
// Router Orders_item
Route::get('/orders',[Orders_item::class, 'index']);
// Router Suppliers
Route::get('/suppliers', function () {
    return 'xin chao suppliers nhe';
});
