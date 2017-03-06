<?php

namespace sapl\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use sapl\User;

class UsuarioController extends Controller
{
    private  $usuario;

    public function __construct(User $usuario){

        $this->usuario = $usuario;
    }

    public function usuario(){
        $usuarios = $this->usuario->orderBy('ativo','desc')->paginate(18);
        return view('admin.usuario.index',compact('usuarios'));
    }

    public function novoUsuario(){
        return view('admin.usuario.create');
    }

    public function salvarUsuario(Request $request)
    {
        $usuario = $this->usuario->fill($request->all());
        $usuario->password = bcrypt($usuario->password);
        if ($usuario->save()) {
            $request->session()->flash('alert-edit', 'Salvo com sucesso!');
            return redirect()->route('usuario');
        } else {
            $request->session()->flash('alert-error', 'Houve um erro ao salvar!');
            return redirect()->route('usuario');
        }
    }

    public function editarUsuario($id){
        $usuario = $this->usuario->find($id);
        return view('admin.usuario.edit',compact('usuario'));
    }
    public function alterarUsuario(Request $request,$id){

        $usuarioDados = $this->usuario->fill($request->all());
        $usuarioDados->password = bcrypt($usuarioDados->password);


        $usuarioDados = $usuarioDados->toArray();
        if($this->usuario->find($id)->update($usuarioDados)){
            $request->session()->flash('alert-edit','Editado com sucesso!');
            return redirect()->route('usuario');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('usuario');
        }
    }

    public function deletarUsuario(Request $request,$id){
        if( $this->usuario->find($id)->delete()){
            $request->session()->flash('alert-delete','Deletado com sucesso!');
            return redirect()->route('usuario');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('usuario');
        }
    }

}
