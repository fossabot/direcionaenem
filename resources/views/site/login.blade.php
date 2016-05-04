
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DirecionaConcursos :: Login</title>
    <meta name="robots" content="noindex">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link type="text/css" href="{{ elixir('css/all.css') }}" rel="stylesheet">

</head>

<body class="login">

<div class="row">
    <div class="col-sm-8 col-sm-push-1 col-md-4 col-md-push-4 col-lg-4 col-lg-push-4">
        <div class="center m-a-2">
            <div class="icon-block img-circle">
                <i class="material-icons md-36 text-muted">lock</i>
            </div>
        </div>
        <div class="card bg-transparent">
            <div class="card-header bg-white center">
                <h4 class="card-title">Login</h4>
                <p class="card-subtitle">Access your account</p>
            </div>
            <div class="p-a-2">
                <form action="index.html" method="get">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group ">
                        <button type="submit" class="btn  btn-primary  btn-block btn-rounded">
                            Login
                        </button>
                    </div>
                    <div class="center">
                        <a href="#">
                            <small>Forgot Password?</small>
                        </a>
                    </div>
                </form>
            </div>
            <div class="card-footer center bg-white">
                Not yet a student? <a href="sign-up.html">Sign up</a>
            </div>
        </div>
    </div>
</div>
<script src="{{ elixir('js/login.js') }}"></script>
</body>
</html>