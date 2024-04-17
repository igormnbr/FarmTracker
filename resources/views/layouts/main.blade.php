<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- Fontes -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Boostrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- CSS da Aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="/" class="navbar-brand">
                    <img src="/img/logo.svg" alt="Logo">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Página Inicial</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a href="/create" class="nav-link">Cadastrar propriedade</a>
                    </li>
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Minhas propriedades</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            @csrf
                            <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                        </form>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item" >
                        <a href="/login" class="nav-link">Entrar</a>
                    </li>
                    <li class="nav-item" >
                        <a href="/register" class="nav-link">Criar conta</a>
                    </li>
                    @endguest
                </ul>
            </nav>
        </header>
        <main>
            <div class="row">
                @if(session('msg'))
                        <p class="msg">{{session('msg')}}</p>
                @endif
            </div>
            @yield('content')
        </main>
        <footer>
            <p>FarmTracker &copy; 2024</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>    
</html>