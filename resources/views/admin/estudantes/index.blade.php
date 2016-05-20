@extends('admin.layout')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin/inicio') }}">Início</a></li>
        <li class="active">Estudantes</li>
    </ol>
    <table class="table">
        <tr>
            <th>Nome</th>
        </tr>
        @foreach($estudantes as $estudante)
            <tr>
                <td>{{ $estudante->nome }}</td>
            </tr>
        @endforeach
    </table>
    {!! $estudantes->render() !!}
@endsection