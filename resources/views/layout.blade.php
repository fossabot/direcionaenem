<!DOCTYPE html>
<html class="bootstrap-layout">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <meta name="robots" content="noindex">

    <link type="text/css" href="{{ asset('css/all.css') }}" rel="stylesheet">
</head>

<body class="layout-container ls-top-navbar si-l3-md-up">
<nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">
    <button class="navbar-toggler pull-xs-left" type="button" data-toggle="sidebar" data-target="#sidebarLeft"><span
                class="material-icons">menu</span></button>
    <a href="index.html" class="navbar-brand"><i class="material-icons">school</i> LearnPlus</a>

    <ul class="nav navbar-nav pull-xs-right">

        <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle p-a-0" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="false">
                <img src="http://lorempixel.com/100/100" alt="Avatar" class="img-circle" width="40">
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-list" aria-labelledby="Preview">
                <a class="dropdown-item" href="account-edit.html"><i class="material-icons md-18">lock</i> <span
                            class="icon-text">Edit Account</span></a>
                <a class="dropdown-item" href="profile.html"><i class="material-icons md-18">person</i> <span
                            class="icon-text">Public Profile</span></a>
                <a class="dropdown-item" href="login.html">Logout</a>
            </div>
        </li>

    </ul>

</nav>
<div class="sidebar sidebar-left sidebar-light sidebar-visible-md-up si-si-3 ls-top-navbar-xs-up sidebar-transparent-md"
     id="sidebarLeft" data-scrollable>
    <div class="sidebar-heading">MENU</div>
    <ul class="sidebar-menu">
        <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="{{ route('estudante.dashboard') }}">
                <i class="sidebar-menu-icon material-icons">dashboard</i> Início
            </a>
        </li>
        <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="{{ route('estudante.metas') }}">
                <i class="sidebar-menu-icon material-icons">insert_chart</i> Minhas Metas
            </a>
        </li>
        <li class="sidebar-menu-item active">
            <a class="sidebar-menu-button" href="{{ route('estudante.aulas') }}">
                <i class="sidebar-menu-icon material-icons">school</i> Minhas Aulas
            </a>
        </li>
        <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="{{ route('estudante.desempenho') }}">
                <i class="sidebar-menu-icon material-icons">description</i> Meu Desempenho
            </a>
        </li>
        <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="{{ route('estudante.mensagens') }}">
                <i class="sidebar-menu-icon material-icons">comment</i> Mensagens
            </a>
        </li>
        <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="{{ route('estudante.contato') }}">
                <i class="sidebar-menu-icon material-icons">settings_phone</i> Contato
            </a>
        </li>
    </ul>
</div>

<div class="layout-content" data-scrollable>
    <div class="container-fluid">
        @yield('content')
    </div>
</div>

<script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>