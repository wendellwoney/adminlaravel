<?php

namespace App\Http\Controllers;

use App\User;
use App\Util\Log\AcoesLog;
use App\Util\Log\src\Log;
use App\Util\Log\TelasLog;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        Log::send(TelasLog::PERFIL, AcoesLog::ACESSO);
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
        Log::send(TelasLog::PERFIL, AcoesLog::EDICAO, $User->id);
        return redirect()->route('perfil.index')->with('success', 'Usuário atualizado com sucesso!');
    }
}
