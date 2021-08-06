<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecnologia extends Model
{
    protected $primaryKey = 'idTecnologia';
    protected $table = 'tecnologia';
    public $timestamps = false;
}
