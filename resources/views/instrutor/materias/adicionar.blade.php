@extends('instrutor.layout')

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ url('instrutor/inicio') }}">Início</a></li>
        <li><a href="{{ url('instrutor/materias') }}">Matérias</a></li>
        <li class="active">Adicionar</li>
    </ol>

    <form action="{{ url('instrutor/materias/salvar') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="card">
            <div class="card-block">
                <h5>Adicionar matéria</h5>
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Matéria">
                </div>
                <div class="form-group">
                    <label class="file">
                        <input type="file" id="imagem" name="imagem">
                        <span class="file-custom"></span>
                    </label>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Salvar</button>
                </div>

                @include('general.errors.first')
                @include('general.success')
            </div>
        </div>
    </form>
@endsection