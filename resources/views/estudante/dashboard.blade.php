@extends('layout')
@section('content')
    <ol class="breadcrumb">
        <li>
            <a href="{{ url('inicio') }}">
                Início
            </a>
        </li>
        <li class="active">
            Área do Aluno
        </li>
    </ol>
    <div class="card card-stats-primary">
        <div class="card-block">
            <div class="media">
                <div class="media-left media-middle">
                    <i class="material-icons text-muted-light">
                        credit_card
                    </i>
                </div>
                <div class="media-body media-middle">
                    Sua inscrição expira em
                    <strong>
                        26 de Junho de 2016
                    </strong>
                </div>
                <div class="media-right">
                    <a class="btn btn-success btn-rounded" href="pay.html">
                        <i class="material-icons">
                            autorenew
                        </i>
                        Renovar Plano
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-faded">
                    <div class="media">
                        <div class="media-body media-middle">
                            <h4 class="card-title">
                                <i class="material-icons md-36">
                                    rss_feed
                                </i>
                                Newsfeed |
                                <small>
                                    Fique por dentro!
                                </small>
                            </h4>
                        </div>
                        <div class="media-right media-middle">
                            <a class="btn btn-white" href="#">
                                <i class="material-icons">
                                    open_in_new
                                </i>
                                Ver todos feeds
                            </a>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-fit">
                    <li class="list-group-item">
                        <div class="media m-b-0">
                            <div class="media-left media-middle">
                                <a href="#">
                                    <img alt="Guy" class="img-perfil" src="{{ asset('assets/img/perfil/estudante/1.jpg') }}" width="100">
                                    </img>
                                </a>
                            </div>
                            <div class="media-body media-middle">
                                <p class="m-b-0">
                                    <a href="forum-thread.html">
                                        Enem 2016 já tem mais de 5 milhões de inscritos!
                                    </a>
                                </p>
                                <p class="m-b-0">
                                    <small>
                                        Fonte:
                                        <a href="#">
                                            Globo.com
                                        </a>
                                    </small>
                                </p>
                                <small class="text-muted-light">
                                    5 minutos atrás
                                </small>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-faded">
                <div class="media">
                    <div class="media-body media-middle">
                        <h4 class="card-title">
                            <i class="material-icons md-36">
                                insert_chart
                            </i>
                            Metas Novas
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-block">
                <div id="donut" style="width: 100%; height:230px;">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-faded">
                <div class="media">
                    <div class="media-body media-middle">
                        <h4 class="card-title">
                            <i class="material-icons md-36">
                                trending_up
                            </i>
                            Desempenho
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection