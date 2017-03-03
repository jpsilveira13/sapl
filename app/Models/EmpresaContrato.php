<?php

namespace sapl\Models;

use Illuminate\Database\Eloquent\Model;

class EmpresaContrato extends Model
{
    protected  $table = 'empresa_contrato';

    protected $fillable = [
        'licitacao_id',
        'nome_empresa',
        'cpf_cnpj',

    ];
}
