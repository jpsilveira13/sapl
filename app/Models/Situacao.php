<?php

namespace sapl\Models;

use Illuminate\Database\Eloquent\Model;

class Situacao extends Model
{
    protected $table = "situacao";

    protected $fillable =  [
      'nome'
    ];
}

