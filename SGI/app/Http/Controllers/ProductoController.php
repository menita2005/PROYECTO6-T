<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        return view('Productos.index');
    }   
    public function create(){
        return view('Productos.create');
    }
    public function Show($pan){
        return view('Productos.show', ['pan' => $pan]);
    }

}
