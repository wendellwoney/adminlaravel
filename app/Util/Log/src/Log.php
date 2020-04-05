<?php


namespace App\Util\Log\src;

use App\Util\Log\src\Model\LogModel;
use Illuminate\Support\Facades\Auth;

class Log
{
    public static function send($tela, $acao, $idItem = null)
    {
        $log = new LogModel();
        $log->tela = $tela;
        $log->acao = $acao;
        $log->user_id = Auth::user()->id;
        $log->data = new \DateTime('now');
        if($idItem){
            $log->id_item = $idItem;
        }

        $log->save();
    }
}
