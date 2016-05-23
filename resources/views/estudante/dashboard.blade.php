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
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-faded">
                <div class="media">
                    <div class="media-body media-middle">
                        <h4 class="card-title">
                            <i class="material-icons">
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
    <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-faded">
                <div class="media">
                    <div class="media-body media-middle">
                        <h4 class="card-title">
                            <i class="material-icons">
                                insert_chart
                            </i>
                            Metas Novas
                        </h4>
                    </div>
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
                            <i class="material-icons">
                                trending_up
                            </i>
                            Desempenho
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-faded">
                <div class="media">
                    <div class="media-body media-middle">
                        <h4 class="card-title">
                            <i class="material-icons">
                                school
                            </i>
                            Minhas Aulas
                            <small class="card-subtitle">
                                Em andamento
                            </small>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="card col-md-4">
            <div class="card-header bg-white ">
                <h4 class="card-title">
                    <a href="take-course.html">
                        Learn VueJs the easy way!
                    </a>
                </h4>
                <small class="text-muted">
                    Lessons: 3 of 7
                </small>
            </div>
            <progress class="progress progress-primary progress-striped m-b-0" max="100" value="40">
                40%
            </progress>
            <div class="card-footer bg-white">
                <a class="btn btn-primary btn-sm" href="take-course.html">
                    Continue
                    <i class="material-icons">
                        play_circle_outline
                    </i>
                </a>
            </div>
        </div>
        <div class="card col-md-4">
            <div class="card-header bg-white ">
                <h4 class="card-title">
                    <a href="take-course.html">
                        Learn VueJs the easy way!
                    </a>
                </h4>
                <small class="text-muted">
                    Lessons: 3 of 7
                </small>
            </div>
            <progress class="progress progress-primary progress-striped m-b-0" max="100" value="40">
                40%
            </progress>
            <div class="card-footer bg-white">
                <a class="btn btn-primary btn-sm" href="take-course.html">
                    Continue
                    <i class="material-icons">
                        play_circle_outline
                    </i>
                </a>
            </div>
        </div><div class="card col-md-4">
            <div class="card-header bg-white ">
                <h4 class="card-title">
                    <a href="take-course.html">
                        Learn VueJs the easy way!
                    </a>
                </h4>
                <small class="text-muted">
                    Lessons: 3 of 7
                </small>
            </div>
            <progress class="progress progress-primary progress-striped m-b-0" max="100" value="40">
                40%
            </progress>
            <div class="card-footer bg-white">
                <a class="btn btn-primary btn-sm" href="take-course.html">
                    Continue
                    <i class="material-icons">
                        play_circle_outline
                    </i>
                </a>
            </div>
        </div>
    </div>
    @endsection
