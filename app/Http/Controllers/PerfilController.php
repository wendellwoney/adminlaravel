<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        $usuario = User::find(\Illuminate\Support\Facades\Auth::user()->id);
        return view('perfil.index')->with(compact('usuario'));
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
        return redirect()->route('perfil.index')->with('success', 'Usuário atualizado com sucesso!');
    }
}
