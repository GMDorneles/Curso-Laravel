<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>

        <!-- Fonte do Google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/styles.css">
        
        <script src="/js/scripts.js"></script>
    </head>
    <body class="antialiased">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                  <img src="/img/hdceventslogo.png" alt="HDC Events">
                </a>
    
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a href="/" class="nav-link" ><b> Eventos </b> </a>
                  </li>
                  <li class="nav-item">
                    <a href="/events/create" class="nav-link"><b> Criar Eventos </b></a>
                  </li>
                  @auth
                  <!--Diretivas para usuário AUTENTICADO   -->
                  <li class="nav-item">
                    <a href="/dashboard" class="nav-link"><b> Meus eventos </b> </a>
                  </li>
                  <li class="nav-item">
                    <a href="/usuarios" class="nav-link"><b> Usuarios </b> </a>
                  </li>
                  <li class="nav-item">
                    <form action="/logout" method="POST">
                      @csrf
                      <a href="/logout" 
                        class="nav-link" 
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        Sair
                      </a>
                    </form>
                  </li>
                  @endauth
                  @guest
                  <!--Diretivas para usuário Não autenticado   -->
                  <li class="nav-item">
                    <a href="/login" class="nav-link"><b> Entrar </b> </a>
                  </li>
                  <li class="nav-item">
                    <a href="/register" class="nav-link"><b> Cadastrar </b> </a>
                  </li>
                  @endguest
                </ul>
              </div>
            </nav>
          </header>
        @yield('content')
   <footer>
    <p>HDC Events &copy; 2020</p>
   </footer>
   <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js">
    </body>
</html>
