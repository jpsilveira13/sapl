@extends('site.app')
@section('header')
    @include('site.header')
@endsection
@section('left_col')
    @include('site.left_col')
@endsection
@section('content')
    <!-- menu pesquisa -->

    <div class="hr-title dt-sc-hr-invisible-small">
        <h3>Filtrar Licitações </h3>
        <div class="title-sep"> </div>
    </div>

    <form action="#" class="form-horizontal" method="post">

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
                <input onkeypress='return SomenteNumero(event)' class="form-control text-box single-line" placeholder="Número do Processo*" id="Processo" name="Processo" type="text" value="">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 form-inline">
                <input class="button" value="Consultar" type="submit">
            </div>
        </div>
    </form>

    <!-- resultado da pesquisa -->
    <div class="dt-sc-hr-invisible-small"></div>
    <div class="hr-title dt-sc-hr-invisible-small">
        <h3>Lista de licitações </h3>
        <div class="title-sep"> </div>
    </div>
    <article class="blog-post type3">
        <!-- **entry-meta - Starts** -->
        <div class="entry-meta">
            <div class="date">
                <p><span>26</span><br/>Jan</p>
            </div>
        </div>
        <!-- **entry-meta - Ends** -->
        <!-- **entry-detail - Starts** -->
        <div class="entry-detail">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th style="width: 35%;" class="text-nowrap item_lic_titulo" scope="row">Pregão Presencial Nº 012/2017</th>
                        <td class="item_lic_titulo item_lic_datapub text-nowrap">Publicação: 26/01/2017 14h56</td>
                    </tr>
                    <tr>
                        <th class="item_lic_data_abertura text-nowrap" scope="row">Processo Administrativo Nº 060.69.253/2016 - SEMOSP</th>
                        <td class="item_lic_situacao">CONTRATADA</td>
                    </tr>
                    <tr>
                        <td style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Abertura</td>
                        <td>Quinta-feira, 9 de Janeiro de 2017 às 09h30min</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Local</th>
                        <td>Central Permanente de Licitação da Prefeitura de São Luis - MA.</td>
                    </tr>
                    <tr>
                        <td class="alerta" colspan="4"><a>Comunica aos interessados que realizará licitação na modalidade Pregão Eletrônico de nº. 05/2017, no dia 06/02/2017, às 9h30, horário de Brasília.</a></td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Objeto</th>
                        <td colspan="4">Contratação de empresa especializada na locação de veículos automotores, de forma continuada, para atender o desenvolvimento das rotinas automotivas, técnicas e operacionais da Secretaria Municipal de Obras e Serviços Públicos - SEMOSP</td>
                    </tr>
                    <tr>
                        <th class="item_lic_titulo text-nowrap" scope="row"> DOCUMENTOS </th>
                        <td class="item_lic_titulo item_lic_datapub text-nowrap"></td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  AVISO</a></th>
                        <td colspan="4">Tamanho:  215 KB | Publicado: 16/01/2017</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  EDITAL</a></th>
                        <td colspan="4">Tamanho:  931 KB | Publicado: 16/01/2017</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  AVISO DE RETIFICAÇÃO</a></th>
                        <td colspan="4">Tamanho:  184 KB | Publicado: 16/01/2017</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  COMUNICADO</a></th>
                        <td colspan="4">Tamanho:  180 KB | Publicado: 16/01/2017</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  JULGAMENTO IMPUGNAÇÃO</a></th>
                        <td colspan="4">Tamanho:  931 KB | Publicado: 20/01/2017</td>
                    </tr>
                    </tbody>
                </table>
                <div style="float: right !important;" class="column dt-sc-one-third form-inline">
                    <a class="dt-sc-button large" href="/sapl/contrato.php">Contrato(s) <span class="fa fa-angle-right"></span></a>
                </div>
            </div>
        </div>
    </article>
    <article class="blog-post type3">
        <!-- **entry-meta - Starts** -->
        <div class="entry-meta">
            <div class="date">
                <p><span>26</span><br/>Jan</p>
            </div>
        </div>
        <!-- **entry-meta - Ends** -->
        <!-- **entry-detail - Starts** -->
        <div class="entry-detail">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th style="width: 35%;" class="text-nowrap item_lic_titulo" scope="row">Pregão Presencial Nº 012/2017</th>
                        <td class="item_lic_titulo item_lic_datapub text-nowrap">Publicação: 26/01/2017 14h56</td>
                    </tr>
                    <tr>
                        <th class="item_lic_data_abertura text-nowrap" scope="row">Processo Administrativo Nº 060.69.253/2016 - SEMOSP</th>
                        <td class="item_lic_situacao">Em Andamento</td>
                    </tr>
                    <tr>
                        <td style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Abertura</td>
                        <td>Quinta-feira, 9 de fevereiro de 2017 às 09h30min</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Local</th>
                        <td>Central Permanente de Licitação da Prefeitura de São Luis - MA.</td>
                    </tr>
                    <tr>
                        <td class="alerta" colspan="4"><a>Comunica aos interessados que realizará licitação na modalidade Pregão Eletrônico de nº. 05/2017, no dia 06/02/2017, às 9h30, horário de Brasília.</a></td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Objeto</th>
                        <td colspan="4">Contratação de empresa especializada na locação de veículos automotores, de forma continuada, para atender o desenvolvimento das rotinas automotivas, técnicas e operacionais da Secretaria Municipal de Obras e Serviços Públicos - SEMOSP</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  AVISO</a></th>
                        <td colspan="4">Tamanho:  215 KB | Publicado: 16/01/2017</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  EDITAL</a></th>
                        <td colspan="4">Tamanho:  931 KB | Publicado: 16/01/2017</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  AVISO DE RETIFICAÇÃO</a></th>
                        <td colspan="4">Tamanho:  184 KB | Publicado: 16/01/2017</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  COMUNICADO</a></th>
                        <td colspan="4">Tamanho:  180 KB | Publicado: 16/01/2017</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  JULGAMENTO IMPUGNAÇÃO</a></th>
                        <td colspan="4">Tamanho:  931 KB | Publicado: 20/01/2017</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </article>
    <article class="blog-post type3">
        <!-- **entry-meta - Starts** -->
        <div class="entry-meta">
            <div class="date">
                <p><span>26</span><br/>Jan</p>
            </div>
        </div>
        <!-- **entry-meta - Ends** -->
        <!-- **entry-detail - Starts** -->
        <div class="entry-detail">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <th style="width: 35%;" class="text-nowrap item_lic_titulo" scope="row">Pregão Presencial Nº 012/2017</th>
                        <td class="item_lic_titulo item_lic_datapub text-nowrap">Publicação: 26/01/2017 14h56</td>
                    </tr>
                    <tr>
                        <th class="item_lic_data_abertura text-nowrap" scope="row">Processo Administrativo Nº 060.69.253/2016 - SEMOSP</th>
                        <td class="item_lic_situacao">Em Andamento</td>
                    </tr>
                    <tr>
                        <td style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Abertura</td>
                        <td>Quinta-feira, 9 de fevereiro de 2017 às 09h30min</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Local</th>
                        <td>Central Permanente de Licitação da Prefeitura de São Luis - MA.</td>
                    </tr>
                    <tr>
                        <td class="alerta" colspan="4"><a>Comunica aos interessados que realizará licitação na modalidade Pregão Eletrônico de nº. 05/2017, no dia 06/02/2017, às 9h30, horário de Brasília.</a></td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="item_lic_data_abertura text-nowrap" scope="row">Objeto</th>
                        <td colspan="4">Contratação de empresa especializada na locação de veículos automotores, de forma continuada, para atender o desenvolvimento das rotinas automotivas, técnicas e operacionais da Secretaria Municipal de Obras e Serviços Públicos - SEMOSP</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  AVISO</a></th>
                        <td colspan="4">Tamanho:  215 KB | Publicado: 16/01/2017</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  EDITAL</a></th>
                        <td colspan="4">Tamanho:  931 KB | Publicado: 16/01/2017</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  AVISO DE RETIFICAÇÃO</a></th>
                        <td colspan="4">Tamanho:  184 KB | Publicado: 16/01/2017</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  COMUNICADO</a></th>
                        <td colspan="4">Tamanho:  180 KB | Publicado: 16/01/2017</td>
                    </tr>
                    <tr>
                        <th style="border-right: 2px solid #666;" class="alerta text-nowrap"
                            scope="row"><a href=""><span class="fa fa-file-pdf-o iconpdf"> </span>  JULGAMENTO IMPUGNAÇÃO</a></th>
                        <td colspan="4">Tamanho:  931 KB | Publicado: 20/01/2017</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </article>

    <!-- paginacao licitacao -->
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