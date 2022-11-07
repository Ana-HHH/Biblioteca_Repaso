<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    @extends('template')

    @section('Navbar')
    @endsection

    @section('Body')
    <main class="container">

        {{-- articulo destacado --}}
        <div class="destacado">
        <div class="p-4 p-md-5 mb-4 rounded">
          <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Noticia Destacadaa</h1>
            <p class="text-white lead my-3" style="background-color:black; font-size: 2.25rem">Los libros que son demasiado "peligrosos" para ser leídos</p>
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
                <img src= "/assets/images/GRRM.jpg"
                width="200" height="250"  preserveAspectRatio="xMidYMid slice" focusable="false"/> 
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0">Noticias</h3>
                <div class="mb-1 text-muted">7 Julio</div>
                <p class="mb-auto">Kazuki Takahashi: qué se sabe de la muerte del creador de la exitosa saga Yu-Gi-Oh!</p>
                <a href="https://www.bbc.com/mundo/noticias-62086514" class="stretched-link">Seguir leyendo...</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src= "/assets/images/Kazuki_01.jpg"
                width="200" height="250"  preserveAspectRatio="xMidYMid slice" focusable="false"/> 
              </div>
            </div>
          </div>
      
        </div>
      
      </main>
      
    @endsection

    @section('Footer')
    @endsection


    
</body>
</html>