<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="shortcut icon" href="{{ asset('/imgs/code.png') }}" type="image/x-icon">
    <title>Sá Diego Projects</title>
</head>
<body>
    <header>
        @component('components/navbar') @endcomponent
    </header>
    <main>
        <section class="container text-center">
            @component('layouts/welcome') @endcomponent
        </section>
    </main>
    <footer>
        <!-- AQUI É ONDE FICARÃO OS MEUS LINKS -->
        <!-- (LINKS TAMBÉM FICARÃO NA PÁGINA SOBRE E CONTATE-ME) -->
        <!--
            ainda pensando em colocar os links no navbar
            e no footer colocar alguma outra coisa
            "essa é uma página criada em laravel e bootstrap,
            o restante dos projetos foram criados em outros frameworks dentro do laravel,
            clique em algum projeto para que eu te conte mais"
        -->
    </footer>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/style.js') }}" type="text/javascript"></script>
</body>
</html>