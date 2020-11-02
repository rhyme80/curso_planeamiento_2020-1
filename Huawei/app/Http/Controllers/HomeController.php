<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()//invoke administra una sola ruta
    {
       return view("Home"); 
    }
}
