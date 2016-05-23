<!DOCTYPE html>
<html class="bootstrap-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Direciona Enem - Dashboard Início')</title>
    <link href="{{ asset('css/all.css') }}" rel="stylesheet" type="text/css">
</head>
<body class="layout-container ls-top-navbar si-l3-md-up">
<nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">
    <button class="navbar-toggler pull-xs-left" data-target="#sidebarLeft" data-toggle="sidebar" type="button">
            <span class="material-icons">
                menu
            </span>
    </button>
    <a class="navbar-brand" href="{{ url('inicio') }}">
        <i class="material-icons">
            school
        </i>
        DirecionaEnem
    </a>
    <ul class="nav navbar-nav pull-xs-right">
        <li class="nav-item dropdown">
            <a aria-haspopup="false" class="nav-link active dropdown-toggle p-a-0" data-toggle="dropdown" href="#"
               role="button">
                <img alt="Avatar" class="img-thumbnail img-perfil"
                     src="{{ asset('assets/img/perfil/estudante/1.jpg') }}" width="40">
                </img>
                {{ auth()->guard('estudante')->user()->nome }}
            </a>
            <div aria-labelledby="Preview" class="dropdown-menu dropdown-menu-right dropdown-menu-list">
                <a class="dropdown-item" href="{{ url('/minha-conta') }}">
                    <i class="material-icons md-18">
                        account_box
                    </i>
                    <span class="icon-text">
                        Minha Conta
                    </span>
                </a>
                <a class="dropdown-item" href="{{ url('/ver-perfil') }}">
                    <i class="material-icons md-18">
                        account_circle
                    </i>
                    <span class="icon-text">
                        Ver Perfil
                    </span>
                </a>
                <a class="dropdown-item" href="{{ url('/ajuda') }}">
                    <i class="material-icons md-18">
                        help
                    </i>
                    <span class="icon-text">
                        Ajuda
                    </span>
                </a>
                <a class="dropdown-item" href="{{ url('/fale-conosco') }}">
                    <i class="material-icons md-18">
                        chat
                    </i>
                    <span class="icon-text">
                        Fale Conosco
                    </span>
                </a>
                <a class="dropdown-item" href="{{ url('deslogar') }}">
                    <i class="material-icons md-18">
                        exit_to_app
                    </i>
                    Log Out
                </a>
            </div>
        </li>
    </ul>
    <ul class="nav navbar-nav pull-xs-right hidden-sm-down">
        <!-- <li class="nav-item">
            <i class="sidebar-menu-icon material-icons">
                home
            </i>
        </li>
        <li class="nav-item">
            <a href="">
                <i class="sidebar-menu-icon material-icons">
                    email
                </i>
            </a>
        </li>
        <li class="nav-item">
            <i class="sidebar-menu-icon material-icons">
                settings
            </i>
        </li>
        <li class="nav-item">
            <span class="divider-vertical">
            </span>
        </li> -->
    </ul>
</nav>
<div class="sidebar sidebar-left sidebar-light sidebar-visible-md-up si-si-3 ls-top-navbar-xs-up sidebar-white-md"
     data-scrollable="" id="sidebarLeft">
    <div class="sidebar-heading">
        MENU
    </div>
    <ul class="sidebar-menu">
        <li class="sidebar-menu-item {{ set_active('inicio') }}">
            <a class="sidebar-menu-button" href="{{ url('inicio') }}">
                <i class="sidebar-menu-icon material-icons">
                    dashboard
                </i>
                Início
            </a>
        </li>
        <li class="sidebar-menu-item {{ set_active('aulas') }}">
            <a class="sidebar-menu-button" href="{{ url('aulas') }}">
                <i class="sidebar-menu-icon material-icons">
                    school
                </i>
                Minhas Aulas
            </a>
        </li>
        <li class="sidebar-menu-item {{ set_active('metas') }}">
            <a class="sidebar-menu-button" href="{{ url('metas') }}">
                <i class="sidebar-menu-icon material-icons">
                    insert_chart
                </i>
                Minhas Metas
            </a>
        </li>
        <li class="sidebar-menu-item {{ set_active('desempenho') }}">
            <a class="sidebar-menu-button" href="{{ url('desempenho') }}">
                <i class="sidebar-menu-icon material-icons">
                    border_color
                </i>
                Minhas Redações
            </a>
        </li>
        <li class="sidebar-menu-item {{ set_active('desempenho') }}">
            <a class="sidebar-menu-button" href="{{ url('desempenho') }}">
                <i class="sidebar-menu-icon material-icons">
                    trending_up
                </i>
                Meu Desempenho
            </a>
        </li>
        <li class="sidebar-menu-item {{ set_active('mensagens') }}">
            <a class="sidebar-menu-button" href="{{ url('mensagens') }}">
                <i class="sidebar-menu-icon material-icons">
                    comment
                </i>
                Minhas Mensagens
            </a>
        </li>
        <!-- <li class="sidebar-menu-item {{ set_active('contato') }}">
            <a class="sidebar-menu-button" href="{{ url('contato') }}">
                <i class="sidebar-menu-icon material-icons">
                    settings_phone
                </i>
                Contato
            </a>
        </li> -->
    </ul>
</div>
<div class="layout-content" data-scrollable="">
    <div class="container-fluid">
        @yield('content')
    </div>
</div>
<script src="{{ elixir('js/app.js') }}">
</script>
</body>
</html>