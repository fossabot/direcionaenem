<!DOCTYPE html>
<html class="bootstrap-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
</head>
<body class="layout-container ls-top-navbar si-l3-md-up">
<nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">
    <button class="navbar-toggler pull-xs-left" data-target="#sidebarLeft" data-toggle="sidebar" type="button">
            <span class="material-icons">
                menu
            </span>
    </button>
    <a class="navbar-brand" href="{{ url('instrutor/inicio') }}">
        <i class="material-icons">
            school
        </i>
        DirecionaInstrutor
    </a>
    <ul class="nav navbar-nav pull-xs-right">
        <li class="nav-item dropdown">
            <a aria-haspopup="false" class="nav-link active dropdown-toggle p-a-0" data-toggle="dropdown" href="#"
               role="button">
                <img alt="Avatar" class="img-thumbnail img-perfil"
                     src="{{ asset('assets/img/perfil/estudante/1.jpg') }}" width="40">
                </img>
                {{ auth()->guard('instrutor')->user()->nome }}
            </a>
            <div aria-labelledby="Preview" class="dropdown-menu dropdown-menu-right dropdown-menu-list">
                <a class="dropdown-item" href="{{ url('/editar-conta') }}">
                    <i class="material-icons md-18">account_box</i>
                    <span class="icon-text">Minha Conta</span>
                </a>
                <a class="dropdown-item" href="profile.html">
                    <i class="material-icons md-18">account_circle</i>
                    <span class="icon-text">Ver Perfil</span>
                </a>
                <a class="dropdown-item" href="{{ url('instrutor/deslogar') }}">
                    <i class="material-icons md-18">exit_to_app</i>
                    Deslogar
                </a>
            </div>
        </li>
    </ul>
    <ul class="nav navbar-nav pull-xs-right hidden-sm-down">
        <li class="nav-item">
            <i class="sidebar-menu-icon material-icons">
                home
            </i>
        </li>
        <li class="nav-item">
            <i class="sidebar-menu-icon material-icons">
                email
            </i>
        </li>
        <li class="nav-item">
            <i class="sidebar-menu-icon material-icons">
                settings
            </i>
        </li>
        <li class="nav-item">
            <span class="divider-vertical">
            </span>
        </li>
    </ul>
</nav>
<div class="sidebar sidebar-left sidebar-light sidebar-visible-md-up si-si-3 ls-top-navbar-xs-up sidebar-white-md"
     data-scrollable="" id="sidebarLeft">
    <div class="sidebar-heading">
        MENU
    </div>
    <ul class="sidebar-menu">
        <li class="sidebar-menu-item {{ set_active('instrutor/materias') }}">
            <a class="sidebar-menu-button" href="{{ url('instrutor/materias') }}">
                <i class="sidebar-menu-icon material-icons">
                    school
                </i>
                Matérias
            </a>
        </li>

        <li class="sidebar-menu-item {{ set_active('instrutor/metas') }}">
            <a class="sidebar-menu-button" href="{{ url('instrutor/metas') }}">
                <i class="sidebar-menu-icon material-icons">
                    insert_chart
                </i>
                Metas
            </a>
        </li>
    </ul>
</div>
<div class="layout-content" data-scrollable="">
    <div class="container-fluid">
        @yield('content')
    </div>
</div>
@section('scripts')
    <script src="{{ elixir('js/app.js') }}"></script>
@show
</body>
</html>