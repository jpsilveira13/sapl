<?php

namespace sapl\Http\Controllers;

use Illuminate\Http\Request;
use sapl\Models\Modalidade;
use sapl\Models\Orgao;
use sapl\Models\Situacao;

class SiteController extends Controller
{
    private  $orgao;
    private  $modalidade;
    private  $situacao;

    public function __construct(Orgao $orgao, Modalidade $modalidade, Situacao $situacao){
        $this->modalidade = $modalidade;
        $this->situacao = $situacao;
        $this->orgao = $orgao;
    }

    public function principal(){


        $orgaos = $this->orgao->get();

        $modalidades = $this->modalidade->get();
        $situacoes = $this->situacao->get();
        return view('site.store',compact('orgaos','modalidades','situacoes'));
    }


}
