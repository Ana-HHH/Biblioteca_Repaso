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
           El usuario se ha registrado
        </div>
    @endif

    <div class="container mt-4 mb-4">
        <div class="row">
          <div class="col">
  
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                    Registrar Cliente Nuevo</div>
                <div class="card-body">
                  <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="clientnew">
                  @csrf
  
                    <div class="form-group">
                      <label for="NombreCliente">Nombre Completo</label>
                      <input type="text" id="NombreCliente" name="NombreCliente" class="form-control" value="{{ old('NombreCliente') }}">
                    </div>
                    @if ($errors->has('NombreCliente'))
                        <div class="alert alert-warning col" role="alert">
                            <strong>{{ $errors->first('NombreCliente') }}</strong>
                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="form-group">
                      <label for="EmailCliente">Email</label>
                      <input type="text" id="EmailCliente" name="EmailCliente" class="form-control" value="{{ old('EmailCliente') }}" >
                    </div>
                    @if ($errors->has('EmailCliente'))
                        <div class="alert alert-warning col" role="alert">
                            <strong>{{ $errors->first('EmailCliente') }}</strong>
                            <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                        </div>
                    @endif                    
  
                    <div class="form-group">
                      <label for="NoINE">No. INE</label>
                      <input id="NoINE" name="NoINE" class="form-control" value="{{ old('NoINE') }}">
                    </div>
                    @if ($errors->has('NoINE'))
                        <div class="alert alert-warning col" role="alert">
                            <strong>{{ $errors->first('NoINE') }}</strong>
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