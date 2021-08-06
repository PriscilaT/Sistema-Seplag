<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    protected $primaryKey = 'idInstituicao';
    protected $table = 'instituicao';
    public $timestamps = false;
}
