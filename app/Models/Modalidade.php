<?php

namespace sapl\Models;

use Illuminate\Database\Eloquent\Model;

class Modalidade extends Model
{
    protected $table = "modalidade";

    protected $fillable =  [
        'nome'
    ];
}
