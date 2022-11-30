@foreach ($resultRec as $consulta)
    <div class="modal fade" id="clientUpdate{{ $consulta->ID_Client }}" tabindex="-1" aria-labelledby="clientUpdateLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="clientUpdateLabel">Editar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="container mt-4 mb-4">
                        <div class="row">
                            <div class="col">

                                <form name="add-blog-post-form" id="add-blog-post-form" method="POST"
                                    action="{{ route('client.update', $consulta->ID_Client) }}">
                                    @csrf
                                    {!! method_field('PUT') !!}


                                    <div class="form-group">
                                        <label for="NombreCliente">Nombre Completo</label>
                                        <input type="text" id="NombreCliente" name="NombreCliente"
                                            class="form-control" value="{{ $consulta->Name }}">
                                    </div>
                                    @if ($errors->has('NombreCliente'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('NombreCliente') }}</strong>
                                            <button type="button" class="btn-close right"
                                                data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <label for="EmailCliente">Email</label>
                                        <input type="text" id="EmailCliente" name="EmailCliente" class="form-control"
                                            value="{{ $consulta->Email }}">
                                    </div>
                                    @if ($errors->has('EmailCliente'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('EmailCliente') }}</strong>
                                            <button type="button" class="btn-close right"
                                                data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <label for="NoINE">No. INE</label>
                                        <input id="NoINE" name="NoINE" class="form-control"
                                            value="{{ $consulta->INE }}">
                                    </div>
                                    @if ($errors->has('NoINE'))
                                        <div class="alert alert-warning col" role="alert">
                                            <strong>{{ $errors->first('NoINE') }}</strong>
                                            <button type="button" class="btn-close right"
                                                data-bs-dismiss="alert"></button>
                                        </div>
                                    @endif

                                    <button type="submit" class="btn btn-primary mt-5">Actualizar</button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endforeach
