@extends('layout')
@section('title')
Mensagens - Direciona Enem Dashboard
@endsection
@section('content')
<ol class="breadcrumb">
	<li>
		<a href="{{ url('inicio') }}">
			Início
		</a>
	</li>
	<li class="active">
		Minhas Mensagens
	</li>
</ol>
<h1 class="page-heading">Minhas Mensagens</h1>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<div class="media">
					<div class="media-body media-middle">
						<h4 class="card-title">{{ auth()->guard('estudante')->user()->nome }}, bem-vindo a sua caixa de entrada</h4>
					</div>
					<div class="media-right media-middle">
					<a href="#" class="btn btn-white btn-sm"><i class="material-icons">add</i> Ver Tudo</a>
					</div>
				</div>
			</div>
			<ul class="list-group list-group-fit">
				<li class="list-group-item forum-thread">
					<div class="media o-visible">
						<div class="media-left media-middle">
							<div class="forum-icon-wrapper">
								<a href="forum-thread.html" class="forum-thread-icon">
									<i class="material-icons">email</i>
								</a>
							</div>
						</div>
						<div class="media-body media-middle">
							<p class="m-b-0">
								<a href="forum-thread.html">Parabéns {{ auth()->guard('estudante')->user()->nome }}, você ganhou uma nova recompensa.</a>
							</p>
						</div>
						<div class="media-right media-middle">
							<div style="width:80px; text-align: right;">
								<small class="text-muted-light">5 minutos</small>
							</div>
						</div>
					</div>
				</li>
				<li class="list-group-item forum-thread">
					<div class="media">
						<div class="media-left media-middle">
							<div class="forum-icon-wrapper">
								<a href="forum-thread.html" class="forum-thread-icon">
									<i class="material-icons">email</i>
								</a>
							</div>
						</div>
						<div class="media-body media-middle">
							<p class="m-b-0">
								<a href="forum-thread.html">Confira as metas que foram criadas para o seu perfil.</a>
							</p>
						</div>
						<div class="media-right media-middle">
							<div style="width:80px; text-align: right;">
								<small class="text-muted-light">1 dia atrás</small>
							</div>
						</div>
					</div>
				</li>
				<li class="list-group-item forum-thread">
					<div class="media">
						<div class="media-left media-middle">
							<div class="forum-icon-wrapper">
								<a href="forum-thread.html" class="forum-thread-icon">
									<i class="material-icons">email</i>
								</a>
							</div>
						</div>
						<div class="media-body media-middle">
							<p class="m-b-0">
								<a href="forum-thread.html">Seja bem-vindo ao Direciona Enem.</a>
							</p>
						</div>
						<div class="media-right media-middle">
							<div style="width:80px; text-align: right;">
								<small class="text-muted-light">2 dias atrás</small>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
@endsection
