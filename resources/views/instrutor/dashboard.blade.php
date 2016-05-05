<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instructor :: Dashboard</title>
</head>
<body>
    <h1>Instrutor {{ auth()->user()->nome }}</h1>
    <a href="{{ url('deslogar') }}">Deslogar</a>
</body>
</html>