<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function venta(){
        return view("venta");
    }
    public function inicio(){
        return view("welcome");
    }
}
