<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <!-- bootstrap -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <!-- Styles -->
         <link rel="stylesheet" href="/css/style.css">
         <!-- Scripts -->
        <script src="/js/script.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/knowledge.jpg" alt="knowledge logo" class="logo">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="/" class="nav-link">Enventos</a></li>
                        <li class="nav-item"><a href="/events/create" class="nav-link">Criar Enventos</a></li>
                        <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="/products" class="nav-link">Products</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Entrar</a></li>
                        <li class="nav-item"><a href="/" class="nav-link">Cadastrar</a></li>
                </div>
            </nav>
        </header>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
                @endif
                @yield('content')
            </div>
        </div>
       <footer>
           <p>BlmNework-INFOSI &copy; {{ date('Y') }} - Meu Blog</p>
       </footer>
       <!-- ionicons-->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
