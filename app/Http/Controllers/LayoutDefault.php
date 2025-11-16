<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutDefault extends Controller
{
    public function index(){
        return view("layouts.LayoutDefault");
    }
}
