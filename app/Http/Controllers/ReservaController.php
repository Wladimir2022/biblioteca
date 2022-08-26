<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\User;
use App\Models\Reserva;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use DB;

class ReservaController extends Controller
{
    public function index()
    {
        $reserva=Reserva::join('libros','reservas.libros','=','libros.ISBN')->join('users','reservas.user','=','users.id')->paginate(7);
        return view('reserva.index',["reservas"=>$reserva]);
    }
    public function create()
    {
        $users=User::get();
        $libros=Libro::where('libros.Estado',0)->get();
        return view('reserva.create',["users"=>$users,"libros"=>$libros]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user' => 'required',
            'libro' => 'required',
            'fecha'=> 'required',
            'dias'=>'required',
        ]);

        $reserva= new Reserva;
        $reserva->user=$request->get('user');
        $reserva->libros=$request->get('libro');
        $reserva->dias=$request->get('dias');
        $reserva->fecha=$request->get('fecha');
        $fecha=Carbon::parse($request->get('fecha'));
        $fecha->addDays($request->get('dias'));
        $reserva->FechaFinal=$fecha;
        $reserva->save();

        $libro=Libro::findOrFail($request->get('libro'));
        $libro->Estado=1;
        $libro->update();
        return redirect('reserva');

    }

    public function show($id)
    {
        $reserva=Reserva::join('libros','reservas.libros','=','libros.ISBN')->join('users','reservas.user','=','users.id')->where('reservas.r_id',$id)->first();
        return view('reserva.show',["reservas"=>$reserva]);
    }

    public function edit($id)
    {
        $reserva=Reserva::join('libros','reservas.libros','=','libros.ISBN')->join('users','reservas.user','=','users.id')->where('reservas.r_id',$id)->first();
        $users=User::get();
        $libros=Libro::where('libros.Estado',0)->get();
        return view('reserva.edit',["users"=>$users,"libros"=>$libros,"reservas"=>$reserva]);
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'user' => 'required',
            'libro' => 'required',
            'fecha'=> 'required',
            'dias'=>'required',
        ]);

        $reserva= Reserva::findOrFail($id);
        $reserva->user=$request->get('user');
        if($reserva->libros != $request->get('libro'))
        {
            $libro=Libro::findOrFail($reserva->libros);
            $libro->Estado=0;
            $libro->update();
            $reserva->libros=$request->get('libro');
        }
        else{
            $reserva->libros=$request->get('libro');
        }
       
        $reserva->dias=$request->get('dias');
        $reserva->fecha=$request->get('fecha');
        $fecha=Carbon::parse($request->get('fecha'));
        $fecha->addDays($request->get('dias'));
        $reserva->FechaFinal=$fecha;
        $reserva->save();

        $libro=Libro::findOrFail($request->get('libro'));
        $libro->Estado=1;
        $libro->update();
        return redirect('reserva');
    }

    public function destroy($id)
    {
        $reserva=Reserva::findOrFail($id);
        $libro=Libro::findOrFail($reserva->libros);
        $libro->Estado=0;
        $libro->update();
        $reserva->delete();
        return redirect('reserva');
    }
}
