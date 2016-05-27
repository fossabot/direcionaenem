@extends('instrutor.layout')

@section('scripts')
    @parent
    <script src="{{ asset('js/materias.js') }}"></script>
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="/instrutor/inicio">Início</a></li>
        <li>Matérias</li>
    </ol>

    <h1 class="page-heading h2">Matérias</h1>


    <a href="{{ url('instrutor/materias/adicionar') }}" id="adicionar_materia" class="btn-success btn">Adicionar nova
        matéria</a>
    <hr>
    <div class="card-columns">

        @forelse($materias as $materia)
            <div class="card">
                <div class="card-header bg-white">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="{{ url('materias') }}">
                                <img src="{{ asset("materias/{$materia->imagem}") }}" alt="{{ $materia->titulo }}"
                                     width="100"
                                     height="100"
                                     class="img-rounded">
                            </a>
                        </div>
                        <div class="media-body media-middle">
                            <h4 class="card-title">
                                {{ $materia->titulo }}
                            </h4>
                        </div>
                        <div class="media-right media-middle">
                            <a href="{{ url("instrutor/materias/excluir/{$materia->id}") }}" class="btn btn-danger">
                                <i class="fa fa-trash"></i> Excluir</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="alert alert-warning">
                Nenhuma matéria cadastrada até o momento. Clique <a href="{{ url('instrutor/materias/adicionar') }}">Adicionar</a>
            </div>
        @endforelse
    </div>

@endsection