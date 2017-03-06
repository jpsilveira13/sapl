<?php

namespace sapl\Models;

use Illuminate\Database\Eloquent\Model;

class LicitacaoDocumento extends Model
{
    protected $table = "licitacao_documento";

    protected  $fillable = [
        'licitacao_id',
        'titulo',
        'tamanho',
        'url_pdf',

    ];

    public function licitacao(){
        return $this->belongsTo(Licitacao::class);
    }
}
