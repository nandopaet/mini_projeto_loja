<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <title>{{ config('app.name', 'Loja') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('site/assets/js/plugins/fontawesome-free/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/app.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand logo" href="/painel">FASTSHOP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/painel"><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/painel/clientes"><i class="fas fa-user"></i> Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/painel/produtos"><i class="fas fa-box"></i> Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/painel/pedidos"><i class="fas fa-dolly"></i> Pedidos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content_tempalte')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{ asset('admin/assets/js/jquery-1.9.1.js') }}" defer></script>
<script src="{{ asset('admin/assets/js/app.js') }}" defer></script>
@yield('js')
</body>
</html>
