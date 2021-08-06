<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $primaryKey = 'idProjeto';
    protected $table = 'projeto';
    public $timestamps = false;
}
