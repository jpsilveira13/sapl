<?php

namespace sapl\Http\Controllers;

use Illuminate\Http\Request;
use sapl\Models\Situacao;

class SituacaoController extends Controller
{
    private  $situacao;

    public function __construct(Situacao $situacao){
        $this->situacao =$situacao;
    }

    public function todasSituacao(){
        $situacoes = $this->situacao->orderBy('id','desc')->paginate(18);

        return view('admin.situacao.index',compact('situacoes'));
    }

    public function novaSituacao(){
        return view('admin.situacao.create');
    }

    public function salvarSituacao(Request $request){
        if($this->situacao->fill($request->all())->save()){
            $request->session()->flash('alert-success','Salvo com sucesso!');
            return redirect()->route('situacao');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('situacao');
        }
    }

    public function editarSituacao($id){
        $situacao = $this->situacao->find($id);
        return view('admin.situacao.edit',compact('situacao'));
    }

    public function alterarSituacao(Request $request,$id){
        if($this->situacao->find($id)->update($request->all())){
            $request->session()->flash('alert-edit','Editado com sucesso!');
            return redirect()->route('situacao');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('situacao');
        }
    }

    public function deletaSituacao(Request $request,$id){
        if( $this->situacao->find($id)->delete()){
            $request->session()->flash('alert-delete','Deletado com sucesso!');
            return redirect()->route('situacao');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('situacao');
        }
    }

}
