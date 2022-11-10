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
    @if (session()->has('message'))
    <div class="alert alert-success" role="alert">
       El libro se ha registrado
    </div>
    @endif
    
    <div class="container mt-4 mb-4">
      <div class="row">
        <div class="col">

          <div class="card">
              <div class="card-header text-center font-weight-bold">
                  Agregar Libro</div>
              <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="form">
                @csrf

                  <div class="form-group">
                    <label for="ISBN">ISBN</label>
                    <input type="text" id="ISBN" name="ISBN" class="form-control" value='{{old('ISBN')}}'>
                  </div>
                  @if ($errors->has('ISBN'))
                  <div class="alert alert-warning col" role="alert">
                      <strong>{{ $errors->first('ISBN') }}</strong>
                      <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                  </div>
                  @endif
                  
                  <div class="form-group">
                    <label for="Titulo">Titulo</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" value='{{old('titulo')}}'>
                  </div>
                  @if ($errors->has('titulo'))
                  <div class="alert alert-warning col" role="alert">
                      <strong>{{ $errors->first('titulo') }}</strong>
                      <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                  </div>
                  @endif

                  <div class="form-group">
                    <label for="Autor">Autor</label>
                    <input id="autor" name="autor" class="form-control" value='{{old('autor')}}'>
                  </div>
                  @if ($errors->has('autor'))
                  <div class="alert alert-warning col" role="alert">
                      <strong>{{ $errors->first('autor') }}</strong>
                      <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                  </div>
                  @endif
                  
                  <div class="form-group">
                    <label for="Paginas">Páginas</label>
                    <input type="text" id="paginas" name="paginas" class="form-control" value='{{old('paginas')}}'>
                  </div>
                  @if ($errors->has('paginas'))
                  <div class="alert alert-warning col" role="alert">
                      <strong>{{ $errors->first('paginas') }}</strong>
                      <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                  </div>
                  @endif

                  <div class="form-group">
                    <label for="Editorial">Editorial</label>
                    <input id="editorial" name="editorial" class="form-control" value='{{old('editorial')}}'>
                  </div>
                  @if ($errors->has('editorial'))
                  <div class="alert alert-warning col" role="alert">
                      <strong>{{ $errors->first('editorial') }}</strong>
                      <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                  </div>
                  @endif

                  <button type="submit" class="btn btn-primary mt-5">Agregar</button>
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