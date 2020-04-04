<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'asc')->get();
        return view('user.index')->with(compact('users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $User = new User;
        $User->name        = $request->name;
        $User->email       = $request->inputemail;
        if($request->inputemail) {
            $User->	password = bcrypt($request->inputsenha);
        }
        $User->save();
        return redirect()->route('user.index')->with('success', 'Usuário criado com sucesso!');
    }

    public function show($id)
    {
        $usuario = User::find($id);
        if (!$usuario) {
            return redirect()->route('user.index')->withErrors(['Usuário não encontrado!']);
        }

        return view('user.edit')->with(compact('usuario'));
    }

    public function edit()
    {
        return view('user.form');
    }

    public function update(Request $request, $id)
    {
        $User = User::findOrFail($id);
        $User->name        = $request->name;
        $User->email       = $request->inputemail;
        if($request->inputsenha) {
            $User->	password = bcrypt($request->inputsenha);
        }
        $User->save();
        return redirect()->route('user.index')->with('success', 'Usuário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $User = User::findOrFail($id);
        $User->delete();
        return redirect()->route('user.index')->with('success','Usuário removido!');
    }
}
