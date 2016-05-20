@extends('layout')
@section('title')
    Editar Conta - Dashboard
@endsection
@section('content')
<ol class="breadcrumb">
    <li>
        <a href="{{ url('inicio') }}">
            Início
        </a>
    </li>
    <li class="active">
        Minha Conta
    </li>
</ol>
<div class="card">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#first">
                Editar Conta
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#second">
                Alterar Senha
            </a>
        </li>
    </ul>
    <div class="p-a-2 tab-content">
        <div class="tab-pane active" id="first">
            <form action="#" class="form-horizontal">
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label" for="avatar">
                        Foto do Perfil
                    </label>
                    <div class="col-sm-9">
                        <div class="media">
                            <div class="media-left">
                                    <!-- <i class="material-icons text-muted-light md-36">
                                        photo
                                    </i> -->
                                    <img class="img-perfil2"
                                    src="{{ asset('assets/img/perfil/estudante/1.jpg') }}" width="80">
                                </div>
                                <div class="media-body media-middle">
                                    <label class="file">
                                        <input id="file" type="file" class="col-md-12">
                                        <span class="file-custom">
                                        </span>
                                    </input>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 form-control-label" for="name">
                        Nome Completo
                    </label>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-control" placeholder="First Name" type="text" value=" {{ auth()->guard('estudante')->user()->nome }}">
                            </input>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" placeholder="Last Name" type="text" value=" {{ auth()->guard('estudante')->user()->sobrenome }}">
                        </input>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 form-control-label" for="email">
                Email
            </label>
            <div class="col-sm-6 col-md-6">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                        <i class="material-icons md-18 text-muted">
                            mail
                        </i>
                    </span>
                    <input class="form-control" disabled="" placeholder="Email Address" type="text" value=" {{ auth()->guard('estudante')->user()->email }}">
                </input>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-8 col-sm-offset-3">
            <div class="media">
                <div class="media-left">
                    <a class="btn btn-success btn-rounded" href="#">
                        Salvar Mudanças
                    </a>
                </div>
                <div class="media-body media-middle p-l-1">
                    <label class="c-input c-checkbox">
                        <input checked="" type="checkbox">
                        <span class="c-indicator">
                        </span>
                        Receber nossas Novidades
                    </input>
                </label>
            </div>
        </div>
    </div>
</div>
</form>
</div>
<div class="tab-pane" id="second">
    <form action="#" class="form-horizontal">
        <div class="form-group row">
            <label class="col-sm-3 form-control-label" for="password">
                Senha Atual
            </label>
            <div class="col-sm-6 col-md-4">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon3">
                        <i class="material-icons md-18 text-muted">
                            lock
                        </i>
                    </span>
                    <input class="form-control" placeholder="Digite sua senha" type="text">
                </input>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-3 form-control-label" for="password">
            Nova Senha
        </label>
        <div class="col-sm-6 col-md-4">
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">
                    <i class="material-icons md-18 text-muted">
                        lock
                    </i>
                </span>
                <input class="form-control" placeholder="Digite sua nova senha" type="text">
            </input>
        </div>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-3 form-control-label" for="password">
        Confirmar Nova Senha
    </label>
    <div class="col-sm-6 col-md-4">
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon3">
                <i class="material-icons md-18 text-muted">
                    lock
                </i>
            </span>
            <input class="form-control" placeholder="Confirme sua nova senha" type="text">
        </input>
    </div>
</div>
</div>
<div class="form-group row">
    <div class="col-sm-8 col-sm-offset-3">
        <div class="media">
            <div class="media-left">
                <a class="btn btn-success btn-rounded" href="#">
                    Mudar Senha
                </a>
            </div>
        </div>
    </div>
</div>
</form>
</div>
</div>
</div>
@endsection
