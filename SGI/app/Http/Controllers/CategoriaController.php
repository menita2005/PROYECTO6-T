<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){

        $Categorias = Categoria::paginate();
           

        return view('Categoria.index' , compact('Categorias'));
    }   

    public function create(){
        return view('Categoria.create');
    }

    public function Show($id){

        $Categorias = Categoria::find($id);

        
        return view('Categoria.show', compact('Categorias'));
    }
}
