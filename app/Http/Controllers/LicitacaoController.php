<?php

namespace sapl\Http\Controllers;

use Illuminate\Http\Request;
use sapl\Models\EmpresaContrato;
use sapl\Models\Licitacao;
use sapl\Models\LicitacaoDocumento;
use sapl\Models\Modalidade;
use sapl\Models\Orgao;
use sapl\Models\Situacao;
use Illuminate\Support\Facades\File;


class LicitacaoController extends Controller
{
    private $licitacao;
    private $contrato;
    private $modalidade;
    private $orgao;
    private $situacao;
    private $licitacaoDocumento;

    public function __construct(Licitacao $licitacao,EmpresaContrato $contrato,Modalidade $modalidade, Orgao $orgao,Situacao $situacao,LicitacaoDocumento $licitacaoDocumento){
        $this->contrato = $contrato;
        $this->licitacao = $licitacao;
        $this->modalidade = $modalidade;
        $this->orgao = $orgao;
        $this->situacao = $situacao;
        $this->licitacaoDocumento  = $licitacaoDocumento;
}

    public function licitacao(){
        $licitacoes = $this->licitacao->orderBy('id','desc')->paginate(18);
        return view('admin.licitacao.index',compact('licitacoes'));
    }

    public function novaLicitacao(){
        $modalidades = $this->modalidade->orderBy('nome','asc')->get();
        $orgaos = $this->orgao->orderBy('nome','asc')->get();
        $situacoes = $this->situacao->orderBy('nome','asc')->get();

        return view('admin.licitacao.create',compact('modalidades','orgaos','situacoes'));
    }

    public function salvarLicitacao(Request $request){
        $licitacao = $this->licitacao->fill($request->all());
        $licitacao->data_abertura = \DateTime::createFromFormat('d/m/Y', $licitacao->data_abertura)->format('Y-m-d');
        $licitacao->data_publicacao = \DateTime::createFromFormat('d/m/Y', $licitacao->data_publicacao)->format('Y-m-d');

        if($this->licitacao->save()){

            $request->session()->flash('alert-success','Salvo com sucesso!');
            return redirect()->route('licitacao');
        }else{

            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('licitacao');
        }
    }

    public function editarLicitacao($id){
        $licitacao = $this->licitacao->find($id);
        $modalidades = $this->modalidade->orderBy('nome','asc')->get();
        $orgaos = $this->orgao->orderBy('nome','asc')->get();
        $situacoes = $this->situacao->orderBy('nome','asc')->get();
        return view('admin.licitacao.edit',compact('licitacao','modalidades','orgaos','situacoes'));
    }

    public function alterarLicitacao(Request $request,$id){

        $licitacaoDados = $this->licitacao->fill($request->all());
        $licitacaoDados->data_abertura = \DateTime::createFromFormat('d/m/Y', $licitacaoDados->data_abertura)->format('Y-m-d');
        $licitacaoDados->data_publicacao = \DateTime::createFromFormat('d/m/Y', $licitacaoDados->data_publicacao)->format('Y-m-d');

        $licitacaoDados = $licitacaoDados->toArray();
        if($this->licitacao->find($id)->update($licitacaoDados)){
            $request->session()->flash('alert-edit','Editado com sucesso!');
            return redirect()->route('licitacao');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('licitacao');
        }
    }

    public function deletarLicitacao(Request $request,$id){
        if( $this->licitacao->find($id)->delete()){
            $request->session()->flash('alert-delete','Deletado com sucesso!');
            return redirect()->route('licitacao');
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('licitacao');
        }
    }


    //area documentos PDF

    public function documentos($id){
        $licitacao = $this->licitacao->find($id);
        return view('admin.licitacao.index_documentos',compact('licitacao'));
    }
//a terminar
    public function novoDocumento($id){
        $licitacao = $this->licitacao->find($id);
        return view('admin.licitacao.create_documentos',compact('licitacao'));
    }

    public function criarDocumento(Request $request, $id){
        $licitacao = $this->licitacao->find($id);
        $documentosDados = $this->licitacaoDocumento->fill($request->all());

        $file = $request->file('arquivo');
        $documentosDados->tamanho = $file->getSize();
        $documentosDados->url_pdf = str_slug($file->getClientOriginalName());
        $extension = '.'.$file->getClientOriginalExtension();

        $file->move(public_path().'/arquivos/',$documentosDados->url_pdf.$extension);
        if(LicitacaoDocumento::create(['licitacao_id' => $licitacao->id,'titulo' => $documentosDados->titulo,'tamanho'=>$documentosDados->tamanho,'url_pdf' => $documentosDados->url_pdf.$extension])){
            $request->session()->flash('alert-edit','Salvo com sucesso!');
            return redirect()->route('licitacao.documento',['id'=>$licitacao->id]);
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('licitacao.documento',['id'=>$licitacao->id]);
        }

    }

    public function editarDocumento($id){
        $documento = $this->licitacaoDocumento->find($id);

        return view('admin.licitacao.edit_documentos',compact('documento'));

    }

    public function alterarDocumento(Request $request,$id){
        $documento = $this->licitacaoDocumento->find($id);
        $documentosDados = $this->licitacaoDocumento->fill($request->all());
        $file = $request->file('arquivo');
        if($file){
            if($documento->url_pdf){
                if(file_exists(public_path().'/arquivos/'.$documento->url_pdf))
                File::delete(public_path().'/arquivos/'.$documento->url_pdf);
            }
        $documentosDados->tamanho = $file->getSize();
        $documentosDados->url_pdf = str_slug($file->getClientOriginalName());
        $extension = '.'.$file->getClientOriginalExtension();

        $file->move(public_path().'/arquivos/',$documentosDados->url_pdf.$extension);
        }
        $documentosDados->url_pdf = $documentosDados->url_pdf.$extension;
        $documentosDados = $documentosDados->toArray();
        if($this->licitacaoDocumento->find($id)->update($documentosDados)){
            $request->session()->flash('alert-edit','Editado com sucesso!');
            return redirect()->route('licitacao.documento',['id'=>$documento->licitacao_id]);
        }else{
            $request->session()->flash('alert-error','Houve um erro ao salvar!');
            return redirect()->route('licitacao.documento',['id'=>$documento->licitacao_id]);
        }

    }

    public function deletarDocumento(Request $request,$id){
        $documento = $this->licitacaoDocumento->find($id);
        if($documento->url_pdf){
            if(file_exists(public_path().'/arquivos/'.$documento->url_pdf))
                File::delete(public_path().'/arquivos/'.$documento->url_pdf);
        }
        if($this->licitacaoDocumento->find($id)->delete()){
            $request->session()->flash('alert-delete','Deletado com sucesso!');
            return redirect()->route('licitacao.documento',['id'=>$documento->licitacao_id]);
        }else{
            $request->session()->flash('alert-delete','Deletado com sucesso!');
            return redirect()->route('licitacao.documento',['id'=>$documento->licitacao_id]);
        }

    }



}
