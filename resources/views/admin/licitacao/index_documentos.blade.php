@extends('admin.app')
@section('left_col')
    @include('admin.left_col')
@endsection
@section('menu_header')
    @include('admin.menu_header')
@endsection
@section('content')
    <ul class="breadcrumb">
        <li><a href="{{url('sistema')}}">Home</a></li>
        <li><a href="{{route('licitacao')}}">Licitações</a></li>
        <li><a href="#">Licitação: {{$licitacao->id}}</a> </li>

    </ul>

    <div class="col-md-12">
        @if(Session::has('alert-success'))
            <div class="esconde alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alert-success') !!}</em></div>
        @endif
    </div>
    <div class="col-md-12">
        @if(Session::has('alert-edit'))
            <div class="esconde alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alert-edit') !!}</em></div>
        @endif
    </div>
    <div class="col-md-12">
        @if(Session::has('alert-delete'))
            <div class="esconde alert alert-info"><span class="glyphicon glyphicon-ok"></span><em> {!! session('alert-delete') !!}</em></div>
        @endif
    </div>
    <div class="col-md-12">
        @if(Session::has('alert-error'))
            <div class="esconde alert alert-danger"><span class="glyphicon glyphicon-remove"></span><em> {!! session('alert-error') !!}</em></div>
        @endif
    </div>

    <div class="col-md-12 container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h3>

                    <div class="text-center">

                        <a href="{{route('licitacao.documento.novo',['id'=> $licitacao->id])}}"
                           class="btn btn-primary iframe"><span class="glyphicon glyphicon-plus-sign"></span> Novo Documento
                        </a>

                    </div>
                </h3>
            </div>
        </div>
        <br />

        <div class="clearfix"></div>
        <div class="row" style="position: relative">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <div class="row">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#licitacao"><i class="fa fa-file-text-o" aria-hidden="true"></i> Documentos</a>
                            </li>

                        </ul>
                    </div>
                    <br />
                    <div class="tab-content">
                        <div id="licitacao" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">

                                        <div class="table-responsive-vertical shadow-z-1">
                                            <!-- Table starts here -->
                                            <table id="tabela" class="table table-hover table-striped">
                                                <thead>
                                                <tr>
                                                    <th class="font-size16">ID</th>
                                                    <th class="font-size16">Título</th>
                                                    <th class="font-size16">Data de publicação</th>
                                                    <th class="font-size16">Tamanho</th>
                                                    <th class="font-size16">Opções</th>
                                                </tr>
                                                </thead>
                                                <tbody id="resultado">
                                                @foreach($licitacao->documentos as $documento)

                                                    <tr>
                                                        <td data-title="ID"><label class="label label-warning"> {{$documento->id}}</label></td>

                                                        <td data-title="Título">{{$documento->titulo}}</td>

                                                        <td data-title="Data de Publicação">{{ date("d/m/Y", strtotime($documento->created_at)) }}</td>

                                                        <td data-title="Tamanho"><label class="label label-danger">{{$documento->tamanho}}</label></td>
                                                        <td  class="text-center vertical-middle">

                                                            <div class="dropdown">

                                                                <div class="dropdown">
                                                                    <a href="javascript:;" class="btn  btn-primary btn-md" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                                    <ul class="dropdown-menu mudar-posicao pull-right">
                                                                        <li>
                                                                            <a href="{{route('licitacao.documento.edit',['id'=> $documento->id])}}"><i class="fa fa-pencil-square-o"></i> Editar</a>
                                                                        </li>
                                                                        <li class="divider"></li>
                                                                        <li>
                                                                            <a href="{{route('licitacao.documento.deletar',['id'=>$documento->id])}}"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</a>
                                                                        </li>
                                                                        <li class="divider"></li>
                                                                        <li>
                                                                            <a class="fechar" href="javascript:void(0)"><i class="fa fa-fw fa-times"></i>Fechar</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
