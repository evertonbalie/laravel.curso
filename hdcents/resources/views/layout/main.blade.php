<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <script src="/js/scripts.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css">

</head>
<header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="nav-brand">
                <img src="/img/logo.png" alt="HDC Events">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="/" class="nav-link">Eventos</a></li>
                <li class="nav-itma"><a href="/events/create" class="nav-link">Criar Eventos</a></li>
                <li class="nav-item"><a href="/" class="nav-link">Entrar</a></li>
                <li class="nav-item"><a href="/" class="nav-link">cadastrar</a></li>
                <li class="nav-item"><a href="/product/cadastrar" class="nav-link">Cadastrar produtos</a></li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <div class="container-fluid">
        <div class="row">
            @if (session('msg'))
                <p class="msg">{{ session('msg')}}</p>
            @endif

            @yield('content')
        </div>

    </div>
</main>
<footer>
    <p>HDC Events &copy; 2020</p>
</footer>

</html>
