<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $primaryKey = 'idCurso';
    protected $table = 'curso';
    public $timestamps = false;
}
