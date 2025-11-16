<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title') | Mon Agence</title>
</head>
<body>
    <style>
        .navbar {
            background-color: #0a1a2f !important; /* Bleu nuit */
        }

        .navbar-brand {
            color: #f0c674 !important; /* Or */
        }

        .navbar-brand:hover {
            color: #ffdd8a !important;
        }

        .nav-link {
            color: #ffffffcc !important;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #f0c674 !important;
        }

        .btn-warning {
            background-color: #f0c674 !important;
            border: none;
        }

        .btn-warning:hover {
            background-color: #ffdd8a !important;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3">
  <div class="container">

    <!-- Logo -->
    <a class="navbar-brand fw-bold fs-4" href="#">
      <img src="{{ asset('storage/hotels/logo/logo.jpg') }}" alt="Hotel Logo" height="35" class="me-2">
      Hôtel
    </a>

    <!-- Burger button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHotel"
      aria-controls="navbarHotel" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav links -->
    <div class="collapse navbar-collapse" id="navbarHotel">

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#chambres">Chambres</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#galerie">Galerie</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>

        <!-- CTA button -->
        <li class="nav-item ms-lg-3">
          <a class="btn btn-warning px-3 fw-semibold" href="#reservation">
            Réserver
          </a>
        </li>

      </ul>

    </div>
  </div>
</nav>

    <div class="container mt-5">
        @yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>