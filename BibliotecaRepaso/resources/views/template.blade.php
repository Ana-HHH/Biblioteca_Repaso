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

</head>
<body>
    
  {{-- Navbar --}}
<div class="container">

  <header class="blog-header lh-1 py-3">

    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <span class="material-symbols-outlined">newspaper</span>
      </div>

      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">Bibliothek</a>
      </div>

      <div class="col-4 pt-1"></div>

    </div>

  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">Pagina Inicio</a>
      <a class="p-2 link-secondary" href="#">Registrar Libro</a>
      <a class="p-2 link-secondary" href="#">Sistema Busqueda</a>
      <a class="p-2 link-secondary" href="#">Noticias</a>
    </nav>
  </div>
</div>

{{-- Body --}}
<main class="container">

  {{-- articulo destacado --}}
  <div class="destacado">
  <div class="p-4 p-md-5 mb-4 rounded">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Noticia del Dia</h1>
      <p class="text-white lead my-3" style="font-size: 2.25rem">Los libros que son demasiado "peligrosos" para ser leídos</p>
      <p class="lead mb-0"><a href="https://www.bbc.com/mundo/vert-cul-63007647" class="text-white fw-bold">Seguir leyendo...</a></p>
    </div>
  </div>
  </div>

  {{-- cards --}}
  <div class="row mb-2">

    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Noticias</h3>
          <div class="mb-1 text-muted">28 Oct</div>
          <p class="card-text mb-auto">George R.R. Martin está demasiado ocupado escribiendo "Vientos de invierno" para jugar "Elder Ring"</p>
          <a href="https://www.forbes.com/sites/danidiplacido/2022/10/28/george-rr-martin-is-too-busy-writing-winds-of-winter-to-play-elden-ring/?sh=18c3c2a041e9" class="stretched-link">Seguir leyendo...</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">Noticias</h3>
          <div class="mb-1 text-muted">7 julio</div>
          <p class="mb-auto">Kazuki Takahashi: qué se sabe de la muerte del creador de la exitosa saga Yu-Gi-Oh!</p>
          <a href="https://www.bbc.com/mundo/noticias-62086514" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>

  </div>

</main>

{{-- footer --}}

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
  <?php
    $date = new DateTime();
    $current_timestamp = $date->getTimestamp();
  ?>

</footer>


<!-- link for JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>