{{-- Modal Book Update  --}}
@foreach ($resultRec as $consulta)
    <div class="modal fade" id="bookUpdate{{ $consulta->ID_Book }}" tabindex="-1" aria-labelledby="bookUpdateLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookUpdateLabel">Editar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container mt-4 mb-4">
                        <div class="row">
                            <div class="col">

                                <div class="card">
                                    <div class="card-body">
                                        <form name="add-blog-post-form" id="add-blog-post-form" method="POST"
                                            action="{{ route('book.update', $consulta->ID_Book) }}">
                                            @csrf
                                            {!! method_field('PUT') !!}


                                            <div class="form-group">
                                                <label for="ISBN">ISBN</label>
                                                <input type="text" id="ISBN" name="ISBN" class="form-control"
                                                    value='{{ $consulta->ISBN }}'>
                                            </div>
                                            @if ($errors->has('ISBN'))
                                                <div class="alert alert-warning col" role="alert">
                                                    <strong>{{ $errors->first('ISBN') }}</strong>
                                                    <button type="button" class="btn-close right"
                                                        data-bs-dismiss="alert"></button>
                                                </div>
                                            @endif

                                            <div class="form-group">
                                                <label for="Titulo">Titulo</label>
                                                <input type="text" id="titulo" name="titulo" class="form-control"
                                                    value='{{ $consulta->Title }}'>
                                            </div>
                                            @if ($errors->has('titulo'))
                                                <div class="alert alert-warning col" role="alert">
                                                    <strong>{{ $errors->first('titulo') }}</strong>
                                                    <button type="button" class="btn-close right"
                                                        data-bs-dismiss="alert"></button>
                                                </div>
                                            @endif

                                            <div class="form-group">
                                                <label for="Autor">Autor</label>
                                                <input id="autor" name="autor" class="form-control"
                                                    value='{{ $consulta->Author }}'>
                                            </div>
                                            @if ($errors->has('autor'))
                                                <div class="alert alert-warning col" role="alert">
                                                    <strong>{{ $errors->first('autor') }}</strong>
                                                    <button type="button" class="btn-close right"
                                                        data-bs-dismiss="alert"></button>
                                                </div>
                                            @endif

                                            <div class="form-group">
                                                <label for="Paginas">Páginas</label>
                                                <input type="text" id="paginas" name="paginas" class="form-control"
                                                    value='{{ $consulta->Pages }}'>
                                            </div>
                                            @if ($errors->has('paginas'))
                                                <div class="alert alert-warning col" role="alert">
                                                    <strong>{{ $errors->first('paginas') }}</strong>
                                                    <button type="button" class="btn-close right"
                                                        data-bs-dismiss="alert"></button>
                                                </div>
                                            @endif

                                            <div class="form-group">
                                                <label for="Editorial">Editorial</label>
                                                <input id="editorial" name="editorial" class="form-control"
                                                    value='{{ $consulta->Publisher }}'>
                                            </div>
                                            @if ($errors->has('editorial'))
                                                <div class="alert alert-warning col" role="alert">
                                                    <strong>{{ $errors->first('editorial') }}</strong>
                                                    <button type="button" class="btn-close right"
                                                        data-bs-dismiss="alert"></button>
                                                </div>
                                            @endif

                                            <button type="submit" class="btn btn-primary mt-5">Agregar</button>
                                        </form>
                                    </div>
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
