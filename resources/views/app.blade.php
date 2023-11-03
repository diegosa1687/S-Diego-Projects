<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/bootstrap/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/configs/root.css') }}>
    <link rel="stylesheet" href={{ asset('css/configs/utils.css') }}>
    <link rel="stylesheet" href={{ asset('css/configs/navbar.css') }}>
    <link rel="stylesheet" href={{ asset('css/configs/body.css') }}>
    <link rel="stylesheet" href={{ asset('css/configs/footer.css') }}>
    <link rel="shortcut icon" href="{{ asset('/imgs/code.png') }}" type="image/x-icon">
    <title>Sá Diego Projects</title>
    @hasSection ('style') @yield('style') @endif
</head>
<body>
    <header>
        @component('components/navbar') @endcomponent
    </header>
    <main>
        <section class="container text-center">
            @hasSection ('content') @yield('content') @endif
        </section>
    </main>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 px-5">
        @component('components/footer') @endcomponent
    </footer>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/style.js') }}" type="text/javascript"></script>
</body>
</html>