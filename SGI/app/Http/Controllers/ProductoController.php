<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){

        $productos = Producto::paginate();
           

        return view('Productos.index' , compact('productos'));
    }   

    public function create(){
        return view('Productos.create');
    }

    public function Show($id){

        $producto = Producto::find($id);

        

        return view('Productos.show', compact('producto'));
    }
}

