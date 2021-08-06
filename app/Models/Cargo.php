<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $primaryKey = 'idCargo';
    protected $table = 'cargo';
    public $timestamps = false;
}
