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
    @include('bookInsert')

    @if (session()->has('message'))
    <div class="alert alert-success" role="alert">
       El libro se ha registrado
    </div>
    @endif
    
    @foreach($resultRec as $consulta)
    <div class="container mt-4 mb-4">
        <div class="row">
          <div class="col">
  
            <div class="card">
                <div class="card-header text-center font-weight-bold">
                  <div class="mb-1 text-muted">{{$consulta -> fecha}}</div>
                    
                </div>
                <div class="card-body">
                  <h3 class="mb-0"> {{$consulta ->titulo}}</h3 > 
                  <br>
                  {{$consulta ->recuerdo}}              
                </div>
                <div class="card-footer">
                  <a href="{{route('recuerdos.edit', $consulta->idRecuerdo)}}" class="btn btn-warning btn-lg mb-auto">
                    Actualizar
                    <span class="material-symbols-outlined">
                      edit_note
                      </span>
                    </a>

                  <a href="{{route('recuerdos.show', $consulta->idRecuerdo)}}" class="btn btn-danger btn-lg">
                    Eliminar
                    <span class="material-symbols-outlined">
                      delete
                      </span>
                  </a>
                </div>
              </div>
  
          </div>
        </div>
      </div>
    </div>

@endforeach

    @endsection

    @section('Footer')
    @endsection


    
</body>
</html>