<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title') | Administration</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <a class="navbar-brand text-dark" href="/">Agence</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            @php
                $route = request()->route()->getName();
            @endphp
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a @class(["nav-link","text-dark", "active" => str_contains($route, 'admin.hotel')]) aria-current="page" href="{{ route('admin.hotel.index') }}">Gérer les hôtels</a>
                </li>
            </ul>
            <div class="ms-auto">
                @auth
                <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="nav-link">Se déconnecter</button>
                    </form> 
                </li>
                </ul>
                @endauth
            </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>