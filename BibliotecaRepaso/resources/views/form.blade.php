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
    
    <div class="container mt-4 mb-4">
      <div class="row">
        <div class="col">

          <div class="card">
              <div class="card-header text-center font-weight-bold">
                  Agregar Libro</div>
              <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                @csrf

                  <div class="form-group">
                    <label for="ISBN">ISBN</label>
                    <input type="text" id="ISBN" name="ISBN" class="form-control" required="">
                  </div>
                  
                  <div class="form-group">
                    <label for="Titulo">Titulo</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" required="">
                  </div>

                  <div class="form-group">
                    <label for="Autor">Autor</label>
                    <input id="autor" name="autor" class="form-control" required="">
                  </div>
                  
                  <div class="form-group">
                    <label for="Paginas">Páginas</label>
                    <input type="text" id="paginas" name="paginas" class="form-control" required="">
                  </div>

                  <div class="form-group">
                    <label for="Editorial">Editorial</label>
                    <input id="titulo" name="titulo" class="form-control" required="">
                  </div>

                  <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
              </div>
            </div>

        </div>
      </div>
    </div>
    @endsection

    @section('Footer')
    @endsection


    
</body>
</html>