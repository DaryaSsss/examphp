<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #E6E6FA;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Storage of things</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      
                      @if (Auth::guest())
                      <li class="nav-item">
                        <a class="nav-link" href="/registration">Регистрация</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/login">Вход</a>
                      </li>
                      @else 
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Вещи в использовании</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/things">Вещи</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/places">Места</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/mythings">Мои вещи</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/logout">Выход</a>
                      </li>
                      @endif
                    </ul>
                  </div>
                </div>
              </nav>
        </header>
    <main>
        @yield('content')
    </main>
</body>
</html>