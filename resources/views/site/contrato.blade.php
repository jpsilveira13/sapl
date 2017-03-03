@extends('site.app')
@section('header')
    @include('site.header')
@endsection

@section('content')


    <h2 class="aligncenter"> INFORMAÇÔES SOBRE O CONTRATO </h2>
    <p class="aligncenter"> tellus eget ipsum sem lorem sapien fringilla nonummy.</p>
    <div class="dt-sc-hr-invisible-small"></div>
    <div class="column dt-sc-one-third first">
        <div class="dt-sc-contact-info type2">
            <div class="dt-sc-contact-detail">
                <h5> Empresa(s) Vencedora(s): </h5>
            </div>
            <div class="contact-icon">
                @foreach($contratos as $contrato)
                    <span class="fa fa-gavel"></span>
                    <h5> {{$contrato->nome_empresa}} </h5>
                @endforeach
            </div>
        </div>
    </div>
    <div class="column dt-sc-one-third">
        <div class="dt-sc-contact-info type2">
            <div class="dt-sc-contact-detail">
                <h5> CNPJ/CPF </h5>
            </div>
            <div class="contact-icon">
                @foreach($contratos as $contrato)
                    <span class="fa fa-info-circle"></span>
                    <h5>{{$contrato->cpf_cpnj}}</h5>
                @endforeach
            </div>
        </div>
    </div>
    <div class="column dt-sc-one-third">
        <div class="dt-sc-contact-info type2">
            <div class="dt-sc-contact-detail">
                <h5> CONTRATO(S) DA LICITAÇÂO:  </h5>
            </div>
            <div class="contact-icon">
                <span class="fa fa-file-text"></span>
                <h4> <a href="#"> Contrato </a> </h4>
            </div>
            <div class="contact-icon">
                <span class="fa fa-file-text"></span>
                <h4> <a href="#"> Contrato </a> </h4>
            </div>
        </div>
    </div>
    <div class="dt-sc-hr-invisible-small"></div>

@endsection