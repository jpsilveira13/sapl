@extends('admin.app')
@section('left_col')
    @include('admin.left_col')
@endsection
@section('menu_header')
    @include('admin.menu_header')
@endsection
@section('content')

    <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="{{route('licitacao')}}">Licitações</a></li>

    </ul>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar Licitação N°: {{$licitacao->id}}<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <form id="form1" action="{{route('licitacao.update',['id'=> $licitacao->id])}}" method="post" role="form" accept-charset="UTF-8"  class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}" />

                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group{{ $errors->has('modalidade_id') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Modalidade</label>
                            <select name="modalidade_id" class="form form-control col-md-7 col-xs-12">
                                <option value="">Selecione uma opção</option>
                                @foreach($modalidades as $modalidade)

                                    <option @if($modalidade->id == $licitacao->modalidade_id) selected @endif value="{{$modalidade->id}}">{{$modalidade->nome}}</option>
                                @endforeach
                            </select>

                        </div>
                        @if ($errors->has('modalidade_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('modalidade_id') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                        <label>Número da modalidade</label>
                        <input type="text" id="titulo" name="titulo" value="{{$licitacao->titulo}}" autofocus class="form form-control col-md-7 col-xs-12">
                        @if ($errors->has('titulo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('titulo') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group{{ $errors->has('numero_processo') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Número do processo:</label>
                            <input type="text" value="{{$licitacao->numero_processo}}" class="form form-control col-md-7 col-xs-12" name="numero_processo">
                        </div>
                        @if ($errors->has('numero_processo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('numero_processo') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group{{ $errors->has('situacao_id') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Situação</label>
                            <select name="situacao_id" class="form form-control col-md-7 col-xs-12">
                                <option value="">Selecione uma opção</option>
                                @foreach($situacoes as $situacao)

                                    <option @if($situacao->id == $licitacao->situacao_id) selected @endif value="{{$situacao->id}}">{{$situacao->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if ($errors->has('situacao_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('situacao_id') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group{{ $errors->has('data_abertura') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Data de Abertura:</label>
                            <input type="text"  value="{{ date("d/m/Y", strtotime($licitacao->data_abertura)) }}"  class="form form-control col-md-7 col-xs-12" name="data_abertura">
                        </div>
                        @if ($errors->has('data_abertura'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('data_abertura') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 form-group{{ $errors->has('orgao_id') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Orgão</label>
                            <select name="orgao_id" class="form form-control col-md-7 col-xs-12">
                                <option value="">Selecione uma opção</option>
                                @foreach($orgaos as $orgao)

                                    <option @if($orgao->id == $licitacao->orgao_id) selected @endif value="{{$orgao->id}}">{{$orgao->nome}}</option>
                                @endforeach
                            </select>

                        </div>
                        @if ($errors->has('orgao_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('orgao_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group{{ $errors->has('local') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Local:</label>
                            <input type="text"  value="{{$licitacao->local}}"  class="form form-control col-md-7 col-xs-12" name="local">
                        </div>
                        @if ($errors->has('local'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('local') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group{{ $errors->has('data_publicacao') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Data de Publicação:</label>
                            <input type="text"   value="{{ date("d/m/Y", strtotime($licitacao->data_publicacao)) }}" class="form form-control col-md-7 col-xs-12" name="data_publicacao">
                        </div>
                        @if ($errors->has('data_publicacao'))
                            <span class="help-block">
                                <strong>{{ $errors->first('data_publicacao') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group{{ $errors->has('comunicado') ? ' has-error' : '' }}">
                        <label>Comunicado</label>
                        <textarea id="titulo" rows="5" name="comunicado" autofocus class="form form-control col-md-7 col-xs-12">{{$licitacao->comunicado}}</textarea>
                        @if ($errors->has('titulo'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('comunicado') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group{{ $errors->has('objeto') ? ' has-error' : '' }}">
                        <label>Objeto</label>
                        <textarea id="objeto" rows="5" name="objeto"  autofocus class="form form-control col-md-7 col-xs-12">{{$licitacao->objeto}}</textarea>
                        @if ($errors->has('titulo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('objeto') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                            <button type="submit" class="center-block form-btn btn btn-lg btn-success">Editar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <a href="{{route('licitacao')}}" class="btn btn-default">Voltar</a>

@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
