@extends('admin.layout')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url('admin/inicio') }}">Início</a></li>
        <li class="active">Instrutores</li>
    </ol>

    <table class="table table-striped table-bordered">
        <tr>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        @foreach($instrutores as $instrutor)
            <tr>
                <td>{{ $instrutor->nome }}</td>
                <td>
                    <a href="{{ url("admin/instrutores/editar/{$instrutor->id}") }}" class="btn btn-primary"><i class="material-icons md-12">edit</i> </a>
                    <a href="{{ url("admin/instrutores/desativar/{$instrutor->id}") }}" class="btn btn-danger"><i class="material-icons md-12">delete</i> </a>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $instrutores->render() !!}
@endsection
