@extends('site.app')
@section('header')
    @include('site.header')
@endsection
@section('left_col')
    @include('site.left_col')
@endsection
@section('content')
    <?php
    setlocale(LC_ALL, 'pt_BR', 'portuguese');

    ?>
    <!-- menu pesquisa -->

    <div class="hr-title dt-sc-hr-invisible-small">
        <h3>Filtrar Licitações </h3>
        <div class="title-sep"> </div>
    </div>

    <form action="#" class="form-horizontal" id="formSearchLicitacao">

        <div class="form-group">
            <label class="control-label">Modalidade:</label>
            <div class="form-inline">
                <select class="form-control" name="modalidade">
                    <option selected="selected" value="">TODOS</option>
                    @foreach($modalidades as $modalidade)

                        <option  value="{{$modalidade->id}}">{{$modalidade->nome}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Situação:</label>
            <div class="form-inline">
                <select class="form-control" name="situacao">
                    <option selected="selected" value="">TODOS</option>
                    @foreach($situacoes as $situacao)
                        <option  value="{{$situacao->id}}">{{$situacao->nome}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Orgão:</label>
            <div class="form-inline">
                <select class="form-control" name="orgao">
                    <option selected="selected" value="0">TODOS</option>
                    @foreach($orgaos as $orgao)
                        <option  value="{{$orgao->id}}">{{$orgao->nome}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label">Data inicial:</label>
            <input type="date" id="myDate">
        </div>
        <div class="form-group">
            <label class="control-label">Data Final:</label>
            <input type="date" id="myDate">
        </div>

        <div class="form-group">
            <label class="control-label">Nº do Processo:</label>
            <div class="form-inline">
                <input onkeypress='return SomenteNumero(event)' class="form-control text-box single-line" placeholder="Número do Processo*" id="Processo" name="numero_processo" type="text" value="">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 form-inline">
                <input class="button" id="btnSearchLicitacao" value="Consultar" type="submit">
            </div>
        </div>
    </form>

    <!-- resultado da pesquisa -->
    <div class="dt-sc-hr-invisible-small"></div>
    <div class="hr-title dt-sc-hr-invisible-small">
        <h3>Lista de licitações </h3>
        <div class="title-sep"> </div>
    </div>
    <div id="licitacao">
        @foreach($licitacoes as $licitacao)
            <article class="blog-post type3">

                <!-- **entry-meta - Starts** -->
                <div class="entry-meta">
                    <div class="date">
                        <p><span>{{ date("d", strtotime($licitacao->data_publicacao)) }}</span><br/>{{date("M", strtotime($licitacao->data_publicacao)) }}</p>
                    </div>
                </div>
                <!-- **entry-meta - Ends** -->
                <!-- **entry-detail - Starts** -->
                <div class="entry-detail">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <th style="width: 35%;" class="text-nowrap item_lic_titulo" scope="row">Pregão Presencial Nº {{$licitacao->titulo}}</th>
                                <td class="item_lic_titulo item_lic_datapub text-nowrap">Publicação: {{ date("d/m/Y", strtotime($licitacao->data_publicacao)) }}</td>
                            </tr>
                            <tr>
                                <th class="item_lic_data_abertura text-nowrap" scope="row">Processo Administrativo Nº {{$licitacao->numero_processo}}</th>
                                <td class="item_lic_situacao">{{$licitacao->situacao->nome}}</td>
                            </tr>
                            <tr>
                                <td style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Abertura</td>
                                <td>{{strftime('%A, %d de %B de %Y', strtotime($licitacao->data_abertura))}}</td>
                            </tr>
                            <tr>
                                <th style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Local</th>
                                <td>{{$licitacao->local}}</td>
                            </tr>
                            <tr>
                                <td class="alerta" colspan="4"><a>{{$licitacao->comunicado}}</a></td>
                            </tr>
                            <tr>
                                <th style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Objeto</th>
                                <td colspan="4">{{$licitacao->objeto}}</td>
                            </tr>
                            @if($licitacao->documentos)
                                <tr>
                                    <th class="item_lic_titulo text-nowrap" scope="row"> DOCUMENTOS </th>
                                    <td class="item_lic_titulo item_lic_datapub text-nowrap"></td>
                                </tr>
                                @foreach($licitacao->documentos as $documento)
                                    <tr>
                                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                                            scope="row"><a target="_blank" href="{{url('arquivos')}}/{{$documento->url_pdf}}"><span class="fa fa-file-pdf-o iconpdf"> </span> {{$documento->titulo}}</a></th>
                                        <td colspan="4">Tamanho:  @if($documento->tamanho > 100000) {{substr($documento->tamanho,0,1)}} MB @else {{substr($documento->tamanho,0,3)}} KB | Publicado: {{ date("d/m/Y", strtotime($documento->created_at)) }} @endif</td>
                                    </tr>
                                @endforeach
                            @endif

                            </tbody>
                        </table>
                        <?php

                        ?>

                        @if($licitacao->situacao->nome == "CONTRATADA"))
                        <div style="float: right !important;" class="column dt-sc-one-third form-inline">
                            <a class="dt-sc-button large" href="{{url('')}}/{{$licitacao->id}}/contrato">Contrato(s) <span class="fa fa-angle-right"></span></a>
                        </div>
                        @endif
                    </div>
                </div>

            </article>
        @endforeach
    </div>



    <div class="pagination">
        <div class="prev-post"> <a href="#"> <span class="fa fa-caret-left"></span> ANTERIOR </a> </div>
        <ul>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
        </ul>
        <div class="next-post"> <a href="#">PRÓXIMO  <span class="fa fa-caret-right"></span> </a> </div>
    </div>
@endsection