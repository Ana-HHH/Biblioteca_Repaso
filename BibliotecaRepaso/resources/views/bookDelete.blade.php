{{-- Modal Book Delete  --}}
@foreach ($resultRec as $consulta)
    <div class="modal fade" id="bookDelete{{ $consulta->ID_Book }}" tabindex="-1" aria-labelledby="bookDeleteLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        Seguro que Quieres Eliminar
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger text-center font-weight-bold" role="alert">
                        Seguro que quieres eliminar el siguiente recuerdo?
                    </div>

                    <div class="container mt-4 mb-4">
                        <div class="row">
                            <div class="col">

                                <div class="card">
                                    <div class="card-header text-center font-weight-bold">
                                    </div>
                                    <div class="card-body">
                                        <h1 class="mb-0"> {{ $consulta->Title }}</h1>

                                        <div class="mb-1 text-muted">{{ $consulta->Author }}</div>

                                        <br>
                                        <p class="mb-0">ISBN : {{ $consulta->ISBN }}</p>
                                        <br>
                                        <p>Editorial: {{ $consulta->Publisher }}</p>
                                        <p> Numero de Paginas: {{ $consulta->Pages }}</p>
                                    </div>
                                    <form method="POST" action="{{ route('book.destroy', $consulta->ID_Book) }}">
                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger">Eliminar </button>
                                    </form>
                                </div>

                            </div>
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
