<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $users=User::paginate(7);
        return view('usuario.index',["users"=>$users]);
    }
    public function create()
    {
        return view('usuario.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = new User;
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->save();
        return redirect('usuario');

    }

    public function show($id)
    {
        $users=User::findOrFail($id);
        return view('usuario.show',["users"=>$users]);
    }
    public function edit($id)
    {
        $users=User::findOrFail($id);
        return view('usuario.edit',["users"=>$users]);
    }

    public function update(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id . ',id',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->update();
        return redirect('usuario');
    }
    public function destroy($id)
    {
        $usuario=User::findOrFail($id);
        $usuario->delete();
        return redirect('usuario');
    }
}
