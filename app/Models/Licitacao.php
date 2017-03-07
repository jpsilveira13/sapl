<?php

namespace sapl\Models;

use Illuminate\Database\Eloquent\Model;

class Licitacao extends Model
{
    protected $table = 'licitacao';
    protected $fillable = [
        'user_id',
        'modalidade_id',
        'situacao_id',
        'contrato_id',
        'orgao_id',
        'titulo',
        'comunicado',
        'data_publicacao',
        'data_abertura',
        'local',
        'objeto',
        'numero_processo',
        'url_contrato',

    ];

    public function modalidade(){
        return $this->belongsTo(Modalidade::class);
    }

    public function orgao(){
        return $this->belongsTo(Orgao::class);

    }

    public function situacao(){
        return $this->belongsTo(Situacao::class);
    }

    public function documentos(){
        return $this->hasMany(LicitacaoDocumento::class)->orderBy('titulo','asc');
    }


}
