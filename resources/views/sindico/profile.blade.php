<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" href="https://icons.iconarchive.com/icons/twitter/twemoji-alphabet/128/Letter-S-icon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Síndico - ProSind</title>
    <link rel="stylesheet" href="{{ asset('css/sindico.css') }}">
</head>
<body>
    <div class="sindico-container">
        <h1 class="titulo">Perfil do Síndico</h1>
        <div class="foto-container">
            <img id="fotoSindico" src="{{ asset('uploads/' . $sindico->foto_perfil) }}" alt="Foto do Síndico">
            <form id="formUpload" action="{{ route('sindico.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="foto" id="fotoInput" accept="image/*">
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="info-sindico">
            <h2>{{ $sindico->nome }}</h2>
            <p>{{ $sindico->email }}</p>
        </div>
    </div>
</body>
</html>
