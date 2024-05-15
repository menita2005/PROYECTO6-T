<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){

        $Proveedores = Proveedor::paginate();
           

        return view('Proveedor.index' , compact('Proveedores'));
    }   

    public function create(){
        return view('Proveedor.create');
    }

    public function Show($id){

        $Proveedores = Proveedor::find($id);

        
        return view('Proveedor.show', compact('Proveedores'));
    }
}
