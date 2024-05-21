<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategorias;
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
    public function store(StoreCategorias $request){
    

        $Categoria = new Categoria();

        $Categoria->nombre= $request->nombre;
        

        $Categoria->save();
        return redirect()->route('Categoria.show',$Categoria);
    }

    public function Show($id){

        $Categorias = Categoria::find($id);

        
        return view('Categoria.show', compact('Categorias'));
    }
    public function edit(Categoria $categoria) {
        return view('Categoria.edit',compact('categoria'));
    }
    public function update(StoreCategorias $request, Categoria $categoria)  {
        $request->validate( [
            'nombre'=>'required|min:3',
            
    
            ]);
        $categoria->nombre= $request->nombre;
        
        $categoria->save();
        return redirect()->route('Categoria.show',$categoria);
    }
}
