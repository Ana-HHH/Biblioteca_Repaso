<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client New</title>
</head>
<body>

    @extends('template')

    @section('Navbar')
    @endsection

    @section('Body')
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
           El recuerdo se ha registrado
        </div>
    @endif

    <div class="container mt-4 mb-4">
        <div class="row">
          <div class="col">
  
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    Registrar Nuevo Recuerdo</div>
                <div class="card-body">
                  <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="recuerdo">
                  @csrf
  
                    <div class="form-group">
                      <label for="Titulo">Titulo</label>
                      <input type="text" id="txtTitulo" name="txtTitulo" class="form-control" value="{{ old('txtTitulo') }}">
                    </div>
                    @if ($errors->has('txtTitulo'))
                        <div class="alert alert-warning col" role="alert">
                            <strong>{{ $errors->first('txtTitulo') }}</strong>
                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="form-group">
                      <label for="Recuerdo">Recuerdo</label>
                      <input type="text" id="txtRecuerdo" name="txtRecuerdo" class="form-control" value="{{ old('txtRecuerdo') }}" >
                    </div>
                    @if ($errors->has('txtRecuerdo'))
                        <div class="alert alert-warning col" role="alert">
                            <strong>{{ $errors->first('txtRecuerdo') }}</strong>
                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                        </div>
                    @endif                    
  
                    <button type="submit" class="btn btn-primary mt-5">Registrar</button>
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