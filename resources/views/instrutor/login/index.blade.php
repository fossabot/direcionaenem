<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DirecionaEnem :: Login do Instrutor</title>
</head>
<body class="container">
    <h1>Login do Instrutor</h1>

    <form action="{{ route('instrutor.logar') }}" method="post">
        <label for="email">E-mail</label>
        <input type="text" name="email" id="email">

        <label for="email">Senha</label>
        <input type="password" name="senha" id="senha">

        <input type="submit" value="Logar">
        <input type="hidden" name="lembrar">
    </form>

</body>
</html>