<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Orders_item extends Controller
{
    public function index(){
        return view('orders_item.index');
    }
}
