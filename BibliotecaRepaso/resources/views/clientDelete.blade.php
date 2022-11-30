@foreach ($resultRec as $consulta)
    <div class="modal fade" id="clientDelete{{ $consulta->ID_Client }}" tabindex="-1" aria-labelledby="clientDeleteLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="clientDeleteLabel">Eliminar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="alert alert-danger text-center font-weight-bold" role="alert">
                        Seguro que quieres eliminar el siguiente Registro?
                    </div>

                    <div class="container mt-4 mb-4">
                        <div class="row">
                            <div class="col">

                                <h1 class="mb-0"> {{ $consulta->Name }}</h1>

                                <div class="mb-1 text-muted">{{ $consulta->Email }}</div>

                                <br>
                                <p class="mb-0">INE : {{ $consulta->INE }}</p>
                                <br>
                            </div>
                            <form method="POST" action="{{ route('client.destroy', $consulta->ID_Client) }}">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
@endforeach
