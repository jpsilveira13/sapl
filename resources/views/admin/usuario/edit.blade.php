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
        <li><a href="{{route('usuario')}}">Usuários</a></li>

    </ul>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar Usuário: {{$usuario->name}}<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <form id="form1" action="{{route('usuario.update',['id'=> $usuario->id])}}" method="post" role="form" accept-charset="UTF-8"  class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Nome:</label>
                            <input type="text" value="{{$usuario->name}}" required class="form form-control col-md-7 col-xs-12" name="name">
                        </div>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Email:</label>
                            <input type="text" value="{{$usuario->email}}" class="form form-control col-md-7 col-xs-12" required name="email">
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group{{ $errors->has('ativo') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Situação:</label>
                            <select type="text" class="form form-control col-md-7 col-xs-12" name="ativo" required>
                                <option value="">Selecione uma opção</option>
                                <option @if($usuario->ativo == 1) selected @endif value="1">Ativo</option>
                                <option @if($usuario->ativo == 0) selected @endif value="0">Inativo</option>
                            </select>
                        </div>
                        @if ($errors->has('ativo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ativo') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group{{ $errors->has('tipo_usuario') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Tipo de Usuário:</label>
                            <select type="text" class="form form-control col-md-7 col-xs-12" name="tipo_usuario" required>
                                <option value="">Selecione uma opção</option>
                                <option @if($usuario->tipo_usuario == "admin") selected @endif value="admin">Admin</option>
                                <option @if($usuario->tipo_usuario == "usuario") selected @endif value="usuario">Usuário</option>
                            </select>
                        </div>
                        @if ($errors->has('tipo_usuario'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tipo_usuario') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Senha</label>
                            <input type="password" value="{{$usuario->password}}" class="form form-control col-md-7 col-xs-12" required name="password">
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 form-group">
                        <div class="form-group">
                            <label class="control-label">Confirma a senha</label>
                            <input id="password-confirm" value="{{$usuario->password}}" type="password" class="form form-control col-md-7 col-xs-12" name="password_confirmation" required>
                        </div>
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


@endsection

{{-- Scripts --}}
@section('scripts')
@endsection
