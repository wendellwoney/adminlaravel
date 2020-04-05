<?php

namespace App\Http\Controllers;

use App\Util\Log\AcoesLog;
use App\Util\Log\src\Log;
use App\Util\Log\src\Model\LogModel;
use App\Util\Log\TelasLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Log::send(TelasLog::LOG, AcoesLog::ACESSO);
        $logs = LogModel::where('user_id', '=', Auth::user()->id)->orderBy('data', 'desc')->get();
        return view('log.index')->with(compact('logs'));
    }

    public function geral()
    {
        Log::send(TelasLog::LOG_SISTEMA, AcoesLog::ACESSO);
        $logs = LogModel::orderBy('data', 'desc')->get();
        return view('log.geral')->with(compact('logs'));
    }
}
