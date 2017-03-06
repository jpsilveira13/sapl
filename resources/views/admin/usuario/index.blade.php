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
        <li><a href="#">Usuários</a></li>


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

                        <a href="{{route('usuario.create')}}"
                           class="btn btn-primary iframe"><span
                                    class="glyphicon glyphicon-plus-sign"></span> Novo Usuário
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
                                <a data-toggle="tab" href="#usuarios"><i class="fa fa-file-text-o" aria-hidden="true"></i> Usuários</a>
                            </li>

                        </ul>
                    </div>
                    <br />
                    <div class="tab-content">
                        <div id="usuarios" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                    @if($usuarios->count() > 0)
                                        <div class="table-responsive-vertical shadow-z-1">
                                            <!-- Table starts here -->
                                            <table id="tabela" class="table table-hover table-striped">
                                                <thead>
                                                <tr>
                                                    <th class="font-size16">ID</th>
                                                    <th class="font-size16">Email</th>
                                                    <th class="font-size16">Nome</th>
                                                    <th class="font-size16">Data de criação</th>
                                                    <th class="font-size16">Situação</th>
                                                    <th class="font-size16">Opções</th>
                                                </tr>
                                                </thead>
                                                <tbody id="resultado">
                                                @foreach($usuarios as $usuario)

                                                    <tr>
                                                        <td data-title="ID"><label class="label label-warning"> {{$usuario->id}}</label></td>
                                                        <td class="vertical-middle" data-title="Email">{{$usuario->email}}</td>
                                                        <td class="vertical-middle" data-title="Nome">{{$usuario->name}}</td>
                                                        <td data-title="Data de Criação">{{ date("d/m/Y", strtotime($usuario->created_at)) }}</td>
                                                        <td data-title="Situação"><label class="label @if($usuario->ativo > 0) label-success @else label-danger @endif">@if($usuario->ativo == 1) Ativo @else Inativo @endif</label></td>
                                                        <td  class="text-center vertical-middle">

                                                            <div class="dropdown">

                                                                <div class="dropdown">
                                                                    <a href="javascript:;" class="btn  btn-primary btn-md" data-toggle="dropdown"><i class="fa fa-plus"></i></a>
                                                                    <ul class="dropdown-menu mudar-posicao pull-right">

                                                                        <li>
                                                                            <a href="{{route('usuario.edit',['id'=> $usuario->id])}}"><i class="fa fa-pencil-square-o"></i> Editar</a>
                                                                        </li>
                                                                        <li class="divider"></li>
                                                                        <li>
                                                                            <a href="{{route('usuario.delete',['id'=> $usuario->id])}}"><i class="fa fa-trash-o" aria-hidden="true"></i> Deletar</a>
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
                                        <div class="col-md-12">
                                            <div class="text-center">
                                                {!! $usuarios->render() !!}
                                            </div>
                                        </div>
                                    @else
                                        <h2 class="text jumbotron">Não há situação cadastrada!</h2>
                                    @endif
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
