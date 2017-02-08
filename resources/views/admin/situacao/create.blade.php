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
        <li><a href="{{route('situacao')}}">Situações</a></li>

    </ul>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Nova Situação<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <form id="form1" action="{{route('situacao.store')}}" method="post" role="form" accept-charset="UTF-8"  class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="col-md-12 col-sm-12 col-xs-12 form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                        <label>Nome</label>
                        <input type="text" id="nome" name="nome" value="{{old('nome')}}" autofocus class="form form-control col-md-7 col-xs-12">
                        @if ($errors->has('nome'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                            <button type="submit" class="center-block form-btn btn btn-lg btn-success">Salvar</button>
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
