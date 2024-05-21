<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductos;
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
    public function store(StoreProductos $request){
    

        $Producto = new Producto();

        $Producto->NombreP= $request->NombreP;
        $Producto->Descripcion= $request->Descripcion;
        $Producto->Precio= $request->Precio;
        $Producto->stock= $request->stock;

        $Producto->save();
        return redirect()->route('Productos.show',$Producto);
    }

    public function Show($id){

        $producto = Producto::find($id);

        

        return view('Productos.show', compact('producto'));
    }
    public function edit(Producto $producto) {
        return view('Productos.edit',compact('producto'));
    }
    public function update(StoreProductos $request, Producto $producto)  {
        $request->validate( [
            'NombreP'=>'required|min:3',
            'Descripcion'=>'required',
            'Precio'=>'required',
            'stock'=>'required'
    
            ]);
        $producto->NombreP= $request->NombreP;
        $producto->Descripcion= $request->Descripcion;
        $producto->Precio= $request->Precio;
        $producto->stock= $request->stock;
        $producto->save();
        return redirect()->route('Productos.show',$producto);
    }
}

