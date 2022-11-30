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
        @include('clientInsert')
        @include('clientUpdate')
        @include('clientDelete')

        @if (session()->has('validInsert'))
            <div class="alert alert-success" role="alert">
                El usuario se ha registrado
            </div>
        @endif
        @if (session()->has('validUpdate'))
            <div class="alert alert-success" role="alert">
                El usuario se ha actualizado
            </div>
        @endif
        @if (session()->has('validDelete'))
            <div class="alert alert-success" role="alert">
                El usuario se ha borrado
            </div>
        @endif


        <div class="container mt-4 mb-4">
            <div class="row">
                <div class="col">


                    <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#clientInsert">
                        Agregar Cliente
                        <span class="material-symbols-outlined">
                            person_add
                        </span>
                    </button>
                </div>
            </div>
        </div>

        @foreach ($resultRec as $consulta)
            <div class="container mt-4 mb-4">
                <div class="row">
                    <div class="col">

                        <div class="card">
                            <div class="card-header font-weight-bold">
                                <h1 class="mb-0"> {{ $consulta->Name }}</h1>
                            </div>

                            <div class="card-body">
                                <p class="mb-0">Correo : {{ $consulta->Email }}</p>
                                <br>
                                <p>INE: {{ $consulta->INE }}</p>
                            </div>

                            <div class="card-footer">
                                <div class="d-flex flex-row-reverse bd-highlight">
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#clientDelete{{ $consulta->ID_Client }}">
                                        Borrar
                                        <span class="material-symbols-outlined">
                                            person_remove
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-warning mx-5 " data-bs-toggle="modal"
                                        data-bs-target="#clientUpdate{{ $consulta->ID_Client }}">
                                        Actualizar
                                        <span class="material-symbols-outlined">
                                            manage_accounts
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
