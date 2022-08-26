<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use Illuminate\Support\Facades\Redirect;
use DB;

class LibroController extends Controller
{
    public function index()
    {
        $libros=Libro::paginate(7);
        return view('libro.index',["libros"=>$libros]);
    }
    public function create()
    {
        return view('libro.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'código' => 'required|unique:libros,ISBN|min:5|max:5',
            'nombre' => 'required|unique:libros,Nombre',
            'autor'=> 'required',
            'paginas'=>'required',
        ]);
        $libro=New Libro;
        $libro->ISBN=$request->get('código');
        $libro->Nombre=$request->get('nombre');
        $libro->Autor=$request->get('autor');
        $libro->Páginas=$request->get('paginas');
        $libro->Estado=0;
        $libro->save();
        return redirect('libro');

    }

    public function show($id)
    {
        $libros=Libro::findOrFail($id);
        return view('libro.show',["libros"=>$libros]);
    }
    public function edit($id)
    {
        $libros=Libro::findOrFail($id);
        return view('libro.edit',["libros"=>$libros]);
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'código' => 'required|unique:libros,ISBN,' . $id . ',ISBN|min:5|max:5',
            'nombre' => 'required|unique:libros,Nombre,' . $id . ',ISBN',
            'autor'=> 'required',
            'paginas'=>'required',
        ]);
        $libro=Libro::findOrFail($id);
        $libro->ISBN=$request->get('código');
        $libro->Nombre=$request->get('nombre');
        $libro->Autor=$request->get('autor');
        $libro->Páginas=$request->get('paginas');
        $libro->update();
        return redirect('libro');
    }
    public function destroy($id)
    {
        $libro=Libro::findOrFail($id);
        $libro->delete();
        return redirect('libro');
    }
}
