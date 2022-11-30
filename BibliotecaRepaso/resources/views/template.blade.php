<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>

    {{-- link estilo css --}}
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- link for bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- link de fonts de google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Zen+Antique&display=swap" rel="stylesheet">

    {{-- link de material symbols --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    {{-- link SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    
  {{-- Navbar --}}

@yield('Navbar')

<div class="container">

  <header class="blog-header lh-1 py-3">

    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <span class="material-symbols-outlined">newspaper</span>
      </div>

      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Bibliotek</a>
      </div>

      <div class="col-4 pt-1"></div>

    </div>

  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" style="font-weight: {{request() -> routeIS('index') ? 'bold': ''}}"
        href="index">Pagina Inicio</a>
      <a class="p-2 link-secondary" style="font-weight: {{request() -> routeIS('book') ? 'bold': ''}}"
        href="book">Libros</a>
      <a class="p-2 link-secondary" style="font-weight: {{request() -> routeIS('client') ? 'bold': ''}}"
        href="client">Clientes</a>
      <a class="p-2 link-secondary" href="#">Todas las Noticias</a>
    </nav>
  </div>
</div>

{{-- Body --}}
@yield('Body')

{{-- footer --}}

@yield('Footer')

<footer class="blog-footer">
  <p>Bibliotek© 2022 Ana Helena Hernandez Hernandez para clase de Desarollo Web UPQ. No derechos reservados</p>
  <?php
    $date = new DateTime();
    $hoy = date_format($date, 'd/m/Y');
    echo "<p>La fecha de hoy es: ".$hoy. "</p>"
  ?>

</footer>


<!-- link for JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>