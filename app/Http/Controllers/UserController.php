<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $Users = User::orderBy('created_at', 'desc');
        return view('user.index',['Users' => $Users]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $User = new User;
        $User->name        = $request->name;
        $User->description = $request->description;
        $User->quantity    = $request->quantity;
        $User->price       = $request->price;
        $User->save();
        return redirect()->route('user.index')->with('message', 'Usuário criado com sucesso!');
    }

    public function show($id)
    {
        $usuario = User::find($id);
        if (!$usuario) {
            return redirect()->route('user.index')->withErrors(['Usuário não encontrado!']);
        }

        return view('user.edit')->with(compact('usuario'));
    }

    public function edit($id)
    {
        $User = User::findOrFail($id);
        return view('user.edit',compact('User'));
    }

    public function update(Request $request, $id)
    {
        $User = User::findOrFail($id);
        $User->name        = $request->name;
        $User->description = $request->description;
        $User->quantity    = $request->quantity;
        $User->price       = $request->price;
        $User->save();
        return redirect()->route('user.index')->with('message', 'Usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $User = User::findOrFail($id);
        $User->delete();
        return redirect()->route('user.index')->with('alert-success','Usuário removido!');
    }
}
