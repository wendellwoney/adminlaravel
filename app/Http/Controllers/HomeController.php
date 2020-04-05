<?php

namespace App\Http\Controllers;

use App\Util\Log\AcoesLog;
use App\Util\Log\src\Log;
use App\Util\Log\TelasLog;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        Log::send(TelasLog::HOME, AcoesLog::ACESSO);
        return view('home.home');
    }
}
