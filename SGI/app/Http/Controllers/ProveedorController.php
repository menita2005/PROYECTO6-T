<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){

        $Proveedor = Proveedor::paginate();
           

        return view('Proveedor.index' , compact('Proveedor'));
    }   

    public function create(){
        return view('Proveedor.create');
    }

    public function Show($id){

        $Proveedor = Proveedor::find($id);

        

        return view('Proveedor.show', compact('Proveedor'));
    }
}
