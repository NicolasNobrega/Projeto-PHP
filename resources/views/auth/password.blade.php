<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" href="https://icons.iconarchive.com/icons/twitter/twemoji-alphabet/128/Letter-S-icon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci a Senha - ProSind</title>
    <link rel="stylesheet" href="{{ asset('css/password.css') }}">
</head>
<body>
    <div class="password-container">
        <h1 class="titulo">Recuperar Senha</h1>
        <form action="{{ route('password.update') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Seu Email" required>
            <input type="password" name="password" placeholder="Nova Senha" required>
            <input type="password" name="password_confirmation" placeholder="Confirmar Nova Senha" required>
            <button type="submit">Alterar Senha</button>
        </form>
    </div>
</body>
</html>
