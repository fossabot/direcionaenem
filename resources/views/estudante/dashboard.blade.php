<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student :: Dashboard</title>
</head>
<body>
<h1>Estudante {{ auth()->user()->nome }}</h1></body>
<a href="{{ url('login') }}">Ir para o login</a>
<a href="{{ url('deslogar') }}">Deslogar</a>
</body>
</html>