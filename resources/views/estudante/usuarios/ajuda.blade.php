@extends('layout')
@section('title')
Central de Ajuda - Direciona Enem Dashboard
@endsection
@section('content')
<ol class="breadcrumb">
    <li>
        <a href="{{ url('inicio') }}">
            Início
        </a>
    </li>
    <li class="active">
        Central de Ajuda
    </li>
</ol>
<div class="media">
    <div class="media-body">
        <h1 class="page-heading">
            Perguntas Frequentes
        </h1>
    </div>
    <!-- <div class="media-right media-middle">
      <a href="#" class="btn btn-success btn-rounded">Have a Question <i class="material-icons">help_outline</i></a>
  </div> -->
</div>
<div class="card-columns">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <i class="material-icons">
                    info_outline
                </i>
                <span class="icon-text">
                    Como funciona
                </span>
            </h4>
        </div>
        <ul class="list-group list-group-fit">
            <li class="list-group-item">
                <a href="">
                    <i class="material-icons pull-xs-right">
                        trending_flat
                    </i>
                    O Direciona Enem é grátis?
                </a>
            </li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <i class="material-icons">
                    info_outline
                </i>
                <span class="icon-text">
                    Assinatura de planos
                </span>
            </h4>
        </div>
        <ul class="list-group list-group-fit">
            <li class="list-group-item">
                <a href="">
                    <i class="material-icons pull-xs-right">
                        trending_flat
                    </i>
                    Quais planos de assinatura para contratação?
                </a>
            </li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <i class="material-icons">
                    info_outline
                </i>
                <span class="icon-text">
                    Correção de Redação
                </span>
            </h4>
        </div>
        <ul class="list-group list-group-fit">
            <li class="list-group-item">
                <a href="">
                    <i class="material-icons pull-xs-right">
                        trending_flat
                    </i>
                    Como é feita a correção da redação?
                </a>
            </li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <i class="material-icons">
                    info_outline
                </i>
                <span class="icon-text">
                    Cadastro
                </span>
            </h4>
        </div>
        <ul class="list-group list-group-fit">
            <li class="list-group-item">
                <a href="">
                    <i class="material-icons pull-xs-right">
                        trending_flat
                    </i>
                    É preciso fazer o cadastro para assistir às aulas?
                </a>
            </li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <i class="material-icons">
                    info_outline
                </i>
                <span class="icon-text">
                    Pagamento
                </span>
            </h4>
        </div>
        <ul class="list-group list-group-fit">
            <li class="list-group-item">
                <a href="">
                    <i class="material-icons pull-xs-right">
                        trending_flat
                    </i>
                    Quais são as formas de pagamento disponíveis?
                </a>
            </li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <i class="material-icons">
                    info_outline
                </i>
                <span class="icon-text">
                    Exclusões e cancelamentos
                </span>
            </h4>
        </div>
        <ul class="list-group list-group-fit">
            <li class="list-group-item">
                <a href="">
                    <i class="material-icons pull-xs-right">
                        trending_flat
                    </i>
                    Como cancelar minha assinatura?
                </a>
            </li>
        </ul>
    </div>
</div>
@endsection
