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
        <li><a href="#">Painel</a></li>

    </ul>
    <div class="col-md-12 container">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Estatísticas</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <div class="x_content">
                            <div class="row">
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-gavel"></i>
                                        </div>
                                        <div class="count">179</div>
                                        <h3>Licitações Cadastradas</h3>
                                        <p>Licitações e Documentos Cadastrados</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-user"></i>
                                        </div>
                                        <div class="count">6</div>
                                        <h3>Usuários ativos</h3>
                                        <p>usuários cadastrados</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="count">68</div>
                                        <h3>Contatos realizados</h3>
                                        <p>contatos do sapl</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="tile-stats">
                                        <div class="icon"><i class="fa fa-bar-chart"></i>
                                        </div>
                                        <div class="count">1.982.124</div>
                                        <h3>Acessos ao SAPL</h3>
                                        <p>Lorem ipsum psdea itgum rixt.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row top_tiles" style="margin: 10px 0;">
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="tile-stats">
                                        <div class="count">179</div>
                                        <h3>Pregões Eletrônicos</h3>
                                        <p>Cadastrados</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="tile-stats">
                                        <div class="count">28</div>
                                        <h3>Pregões Presenciais</h3>
                                        <p>Cadastrados</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="tile-stats">
                                        <div class="count">32</div>
                                        <h3>Concorrência</h3>
                                        <p>Cadastrados</p>
                                    </div>
                                </div>
                                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="tile-stats">
                                        <div class="count">61</div>
                                        <h3>Tomada de Preço</h3>
                                        <p>Cadastrados</p>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
