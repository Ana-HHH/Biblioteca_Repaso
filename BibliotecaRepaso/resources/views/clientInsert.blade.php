<div class="modal fade" id="clientInsert" tabindex="-1" aria-labelledby="clientInsertLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clientInsertLabel">Registrar Cliente Nuevo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="container mt-4 mb-4">
                    <div class="row">
                        <div class="col">

                            <form name="add-blog-post-form" id="add-blog-post-form" method="POST" action="{{route('client.store')}}">
                                @csrf

                                <div class="form-group">
                                    <label for="NombreCliente">Nombre Completo</label>
                                    <input type="text" id="NombreCliente" name="NombreCliente" class="form-control"
                                        value="{{ old('NombreCliente') }}">
                                </div>
                                @if ($errors->has('NombreCliente'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('NombreCliente') }}</strong>
                                        <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="EmailCliente">Email</label>
                                    <input type="text" id="EmailCliente" name="EmailCliente" class="form-control"
                                        value="{{ old('EmailCliente') }}">
                                </div>
                                @if ($errors->has('EmailCliente'))
                                    <div class="alert alert-warning col" role="alert">
                                        <strong>{{ $errors->first('EmailCliente') }}</strong>
                                        <button type="button" class="btn-close right" data-bs-dismiss="alert"></button>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="NoINE">No. INE</label>
                                    <input id="NoINE" name="NoINE" class="form-control"
                                        value="{{ old('NoINE') }}">
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
    </div>
</div>
