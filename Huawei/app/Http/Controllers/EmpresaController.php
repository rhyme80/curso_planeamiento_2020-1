<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()//invoke administra una sola ruta
    {
       return view("Empresa.index"); 
    }

    public function Informacion()
    {
       return view("Empresa.Informacion"); 
    }
    public function Contactanos()
    {
       return view("Empresa.Contactanos"); 
    }
    public function Matrices()
    {
       return view("Empresa.Matrices"); 
    }
    public function PlanEstrategico()
    {
       return view("Empresa.PlanEstrategico"); 
    }
}
