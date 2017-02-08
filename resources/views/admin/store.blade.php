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
        Logado :D
    </div>
@endsection
