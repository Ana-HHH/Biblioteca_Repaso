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
        @include('bookUpdate')
        @include('bookDelete')

        @if (session()->has('validInsert'))
            <div class="alert alert-success" role="alert">
                El libro se ha registrado
            </div>
        @endif
        @if (session()->has('validUpdate'))
            <div class="alert alert-success" role="alert">
                El libro se ha actualizado
            </div>
        @endif
        @if (session()->has('validDelete'))
            <div class="alert alert-success" role="alert">
                El libro se ha borrado
            </div>
        @endif

        @if ($errors->has('ISBN'))
            <div class="alert alert-warning col" role="alert">
                <strong>{{ $errors->first('ISBN') }}</strong>
                <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if ($errors->has('titulo'))
            <div class="alert alert-warning col" role="alert">
                <strong>{{ $errors->first('titulo') }}</strong>
                <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
            </div>
            @if ($errors->has('paginas'))
                <div class="alert alert-warning col" role="alert">
                    <strong>{{ $errors->first('paginas') }}</strong>
                    <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                </div>
            @endif
            @if ($errors->has('editorial'))
                <div class="alert alert-warning col" role="alert">
                    <strong>{{ $errors->first('editorial') }}</strong>
                    <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                </div>
            @endif
        @endif
        @if ($errors->has('autor'))
            <div class="alert alert-warning col" role="alert">
                <strong>{{ $errors->first('autor') }}</strong>
                <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
            </div>
        @endif




        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bookInsert">
            Agregar
        </button>


        @foreach ($resultRec as $consulta)
            <div class="container mt-4 mb-4">
                <div class="row">
                    <div class="col">

                        <div class="card">
                            <div class="card-header font-weight-bold">
                                <h1 class="mb-0"> {{ $consulta->Title }}</h1>

                                <div class="mb-1 text-muted">{{ $consulta->Author }}</div>

                            </div>

                            <div class="card-body">
                                <p class="mb-0">ISBN : {{ $consulta->ISBN }}</p>
                                <br>
                                <p>Editorial: {{ $consulta->Publisher }}</p>
                                <p> Numero de Paginas: {{ $consulta->Pages }}</p>
                            </div>

                            <div class="card-footer">
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#bookUpdate{{ $consulta->ID_Book }}">
                                    Actualizar
                                    <span class="material-symbols-outlined">
                                        edit_note
                                    </span>
                                </button>


                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#bookDelete{{ $consulta->ID_Book }}">
                                    Borrar
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                </button>
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
