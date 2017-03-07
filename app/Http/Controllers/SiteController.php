<?php

namespace sapl\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use sapl\Models\EmpresaContrato;
use sapl\Models\Licitacao;
use sapl\Models\Modalidade;
use sapl\Models\Orgao;
use sapl\Models\Situacao;

class SiteController extends Controller
{
    private  $orgao;
    private  $modalidade;
    private  $situacao;
    private $licitacao;
    private $empresaContrato;

    public function __construct(EmpresaContrato $empresaContrato,Licitacao $licitacao,Orgao $orgao, Modalidade $modalidade, Situacao $situacao){
        $this->modalidade = $modalidade;
        $this->situacao = $situacao;
        $this->orgao = $orgao;
        $this->licitacao = $licitacao;
        $this->empresaContrato = $empresaContrato;
    }

    public function principal(){


        $orgaos = $this->orgao->get();
        $licitacoes = $this->licitacao->orderBy('id','desc')->paginate(6);
        $modalidades = $this->modalidade->get();
        $situacoes = $this->situacao->get();
        return view('site.store',compact('orgaos','modalidades','situacoes','licitacoes'));
    }

    public function admin(){
        return view('admin.store');
    }

    #Scope licitação
    public function scopeLicitacao(){


        $query = Licitacao::select();


        if(Input::get('modalidade')){
            $query->where('modalidade_id',Input::get('modalidade'));

        }
        if(Input::get('situacao')){
            $query->where('situacao_id',Input::get('situacao'));

        }
        if(Input::get('orgao')){
            $query->where('orgao_id',Input::get('orgao'));

        }
        if(Input::get('numero_processo')){
            $query->where('numero_processo',Input::get('numero_processo'));

        }

        return Response::json($query->orderBy('id','desc')->with('modalidade','orgao','situacao','documentos')->paginate(6));

    }


    public function contrato($id){
        $contratos = $this->empresaContrato->where('licitacao_id',$id)->get();
        return view('site.contrato',compact('contratos'));

    }


}
