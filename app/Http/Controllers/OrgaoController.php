<?php

namespace sapl\Http\Controllers;

use Illuminate\Http\Request;
use sapl\Models\Orgao;

class OrgaoController extends Controller
{
    private  $orgao;

    public function __construct(Orgao $orgao){
        $this->orgao =$orgao;
    }

    public function todosOrgaos(){
        $orgaos = $this->orgao->orderBy('id','desc')->paginate(18);

        return view('admin.orgaos.index',compact('orgaos'));
    }

    public function novoOrgao(){
        return view('admin.orgaos.create');
    }

    public function salvarOrgao(Request $request){
        if($this->orgao->fill($request->all())->save()){
            $request->session()->flash('alert-success','Salvo com sucesso!');
            return redirect()->route('orgaos');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('orgaos');
        }
    }

    public function editarOrgao($id){
        $orgao = $this->orgao->find($id);
        return view('admin.orgaos.edit',compact('orgao'));
    }

    public function alterarOrgao(Request $request,$id){
        if($this->orgao->find($id)->update($request->all())){
            $request->session()->flash('alert-edit','Editado com sucesso!');
            return redirect()->route('orgaos');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('orgaos');
        }
    }

    public function deletarOrgao(Request $request,$id){
        if( $this->orgao->find($id)->delete()){
            $request->session()->flash('alert-delete','Deletado com sucesso!');
            return redirect()->route('orgaos');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('orgaos');
        }
    }

}
