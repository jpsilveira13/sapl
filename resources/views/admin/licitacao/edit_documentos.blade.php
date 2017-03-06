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
        <li><a href="#">{{$documento->titulo}}</a> </li>
    </ul>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Editar documento da Licitação: {{$documento->titulo}}<small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <form id="form1" action="{{route('licitacao.documento.update',['id'=>$documento->id])}}" enctype="multipart/form-data" method="post" role="form" accept-charset="UTF-8"  class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <div class="file-upload">
                            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Adicionar Arquivo</button>

                            <div class="image-upload-wrap" style="display: none;">
                                <input class="file-upload-input" type="file"  name="arquivo" onchange="readURL(this);">
                                <div class="drag-text">
                                    <h3>
                                        Arraste e solte um arquivo ou selecione</h3>
                                </div>
                            </div>
                            <div class="file-upload-content" @if($documento->count()  > 0) style="display: block" @else style="display:none" @endif >
                                <br>
                                <div class="image-title-wrap">
                                    <button type="button" onclick="removeUpload()" class="remove-image">Remover <span class="image-title">{{$documento->url_pdf}}</span></button>
                                </div>
                            </div>
                            <br>
                            <small class="text-center"><b>Obs: Não usar arquivo .exe</b></small>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label class="control-label">Título:</label>
                            <input type="text" value="{{$documento->titulo}}"   class="form form-control col-md-7 col-xs-12" name="titulo">
                        </div>
                        @if ($errors->has('titulo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('titulo') }}</strong>
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
