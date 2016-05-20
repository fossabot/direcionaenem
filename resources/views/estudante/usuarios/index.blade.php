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
        Perfil
    </li>
</ol>
<div class="center">
        <p>
          <a href="#">
            <img src="{{ asset('assets/img/perfil/estudante/1.jpg') }}" width="110" class="img-thumbnail">
          </a>
        </p>
        <h1 class=" h2 m-b-0">{{ auth()->user()->nome }}</h1>
        <p class="lead text-muted m-b-0">São Paulo - Brasil</p>
        <!-- <p><span class="label label-default">STUDENT</span></p> -->
      </div>
      <hr>
        <div class="card">
          <div class="card-header bg-white">
            <div class="media">
              <div class="media-left">
                <i class="material-icons md-32">
                    people
                </i>
              </div>
              <div class="media-body media-middle">
                <h4 class="card-title">Informações Pessoais</a></h4>
              </div>
            </div>
          </div>
          <ul class="list-group list-group-fit">
            <li class="list-group-item">
              <a href="#"><span class="pull-xs-right"><i class="material-icons">keyboard_arrow_right</i></span>Facebook</a>
            </li>
            <li class="list-group-item">
              <a href="#"><span class="pull-xs-right"><i class="material-icons md-18">keyboard_arrow_right</i></span>Twiter</a>
            </li>
          </ul>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6 col-md-offset-3 center">
          <h4 class="m-b-0">Recompensas</h4>
          <p class="text-muted "></p>
          <div class="btn btn-primary btn-circle"><i class="material-icons">thumb_up</i></div>
          <div class="btn btn-danger btn-circle"><i class="material-icons">grade</i></div>
          <div class="btn btn-warning btn-circle"><i class="material-icons">event_available</i></div>
          <br>
          <br>
        </div>
      </div>

@endsection
