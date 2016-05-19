<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DirecionaConcursos :: Login</title>
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="/assets/fonts/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en"
          rel="stylesheet">
    <link type="text/css" href="{{ elixir('css/all.css') }}" rel="stylesheet">
</head>

<body class="login">

<div class="row">
    <div class="col-sm-8 col-sm-push-1 col-md-4 col-md-push-4 col-lg-4 col-lg-push-4">
        <div class="center m-a-2">
            <div class="icon-block img-circle">
                <i class="material-icons md-36 text-muted">school</i>
            </div>
        </div>
        <div class="card bg-transparent">
            <div class="card-header bg-white center">
                <h4 class="card-title">Login</h4>
                <p class="card-subtitle">Accesse sua conta</p>
            </div>
            <div class="p-a-2">
                <form action="{{ route('logar') }}" method="post">
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="senha" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group ">
                        <button type="submit" class="btn btn-primary btn-block btn-rounded">
                            Login
                        </button>
                    </div>
                    <div class="center">
                        <a href="#">
                            <small>Esqueceu a senha?</small>
                        </a>
                    </div>
                    
                    <!-- <form action="{{ url('login/face') }}">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-facebook"></i>
                        </button>
                    </form>

                    <form action="{{ url('login/google') }}">
                        <button type="submit" class="btn btn-danger ">
                            <i class="fa fa-google-plus"></i>
                        </button>
                    </form> -->

                    @if($errors->has())
                        <div class="alert alert-danger center">{{ $errors->first() }}</div>
                    @endif
                </form>
            </div>
            <div class="card-footer center bg-white">
                Ainda não está cadastrado? <a href="{{ route('estudante.cadastrar') }}">Cadastre-se</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>