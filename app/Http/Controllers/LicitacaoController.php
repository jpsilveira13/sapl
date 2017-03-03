<?php

namespace sapl\Http\Controllers;

use Illuminate\Http\Request;
use sapl\Models\EmpresaContrato;
use sapl\Models\Licitacao;

class LicitacaoController extends Controller
{
    private $licitacao;
    private $contrato;

    public function __construct(Licitacao $licitacao,EmpresaContrato $contrato){
        $this->contrato = $contrato;
        $this->licitacao = $licitacao;
    }

    public function licitacao(){
        $licitacoes = $this->licitacao->orderBy('id','desc')->paginate(18);
        return view('admin.licitacao.index',compact('licitacoes'));
    }

    public function novaLicitacao(){
        return view('admin.licitacao.create');
    }

    public function salvarModalidade(Request $request){
        if($this->modalidade->fill($request->all())->save()){
            $request->session()->flash('alert-success','Salvo com sucesso!');
            return redirect()->route('modalidades');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('modalidades');
        }
    }

    public function editarModalidade($id){
        $modalidade = $this->modalidade->find($id);
        return view('admin.modalidades.edit',compact('modalidade'));
    }

    public function alterarModalidade(Request $request,$id){
        if($this->modalidade->find($id)->update($request->all())){
            $request->session()->flash('alert-edit','Editado com sucesso!');
            return redirect()->route('modalidades');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('modalidades');
        }
    }

    public function deletarModalidade(Request $request,$id){
        if( $this->modalidade->find($id)->delete()){
            $request->session()->flash('alert-delete','Deletado com sucesso!');
            return redirect()->route('modalidades');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('modalidades');
        }
    }



}
