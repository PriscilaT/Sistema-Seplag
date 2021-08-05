<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $primaryKey = 'idFuncionario';
    protected $table = 'funcionario';
    public $timestamps = false;

}
