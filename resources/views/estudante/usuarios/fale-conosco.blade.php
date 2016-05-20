@extends('layout')
@section('title')
Fale Conosco - Direciona Enem Dashboard
@endsection
@section('content')
<ol class="breadcrumb">
    <li>
        <a href="{{ url('inicio') }}">
            Início
        </a>
    </li>
    <li class="active">
        Fale Conosco
    </li>
</ol>
<div class="media">
    <div class="media-body">
        <h1 class="page-heading">
            Fale Conosco
        </h1>
    </div>
    <!-- <div class="media-right media-middle">
      <a href="#" class="btn btn-success btn-rounded">Have a Question <i class="material-icons">help_outline</i></a>
  </div> -->
    <form>
        <div class="form-group row">
            <div class="col-sm-12">
                <input class="form-control" placeholder="{{ auth()->guard('estudante')->user()->nome }}" type="text">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input class="form-control" placeholder="{{ auth()->guard('estudante')->user()->email }}" type="text">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input class="form-control" placeholder="Qual o assunto?" type="text">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <textarea class="form-control" placeholder="Digite sua mensagem" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <button class="btn btn-primary" type="submit">
                    Enviar Mensagem
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
