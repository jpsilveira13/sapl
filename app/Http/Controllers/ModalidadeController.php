<?php

namespace sapl\Http\Controllers;

use Illuminate\Http\Request;
use sapl\Models\Modalidade;

class ModalidadeController extends Controller
{
    private  $modalidade;

    public function __construct(Modalidade $modalidade){
        $this->modalidade =$modalidade;
    }

    public function todasMdalidade(){
        $modalidades = $this->modalidade->orderBy('id','desc')->paginate(18);
        return view('admin.modalidades.index',compact('modalidades'));
    }

    public function novaModalidade(){
        return view('admin.modalidades.create');
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
