<?php

namespace App\Util\Log\src\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogModel extends Model
{
    use SoftDeletes;

    protected $fillable = ['tela', 'acao', 'user_id', 'data', 'id_item'];

    protected $table = 'logs';

    public static $rules = [
        'tela' => 'required',
        'acao' => 'required',
        'user_id' => 'required',
    ];
}
