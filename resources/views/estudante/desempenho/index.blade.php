@extends('layout')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('estudante.dashbord') }}">Início</a></li>
        <li><a class="active" href="{{ route('estudante.desempenho') }}">Desempenho</a></li>
    </ol>
@endsection