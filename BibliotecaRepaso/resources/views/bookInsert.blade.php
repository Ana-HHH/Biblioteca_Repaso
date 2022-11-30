{{-- Modal Book  --}}

<div class="modal fade" id="bookInsert" tabindex="-1" aria-labelledby="bookInsertLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bookInsertLabel">Agregar</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container mt-4 mb-4">
                <div class="row">
                    <div class="col">
            
                        <div class="card">
                            <div class="card-body">
                                <form name="add-blog-post-form" id="add-blog-post-form" method="POST"  action="{{route('book.store')}}">
                                    @csrf
            
                                    <div class="form-group">
                                        <label for="ISBN">ISBN</label>
                                        <input type="text" id="ISBN" name="ISBN" class="form-control"
                                            value='{{ old('ISBN') }}'>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="Titulo">Titulo</label>
                                        <input type="text" id="titulo" name="titulo" class="form-control"
                                            value='{{ old('titulo') }}'>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="Autor">Autor</label>
                                        <input id="autor" name="autor" class="form-control"
                                            value='{{ old('autor') }}'>
                                    </div>
            
                                    <div class="form-group">
                                        <label for="Paginas">Páginas</label>
                                        <input type="text" id="paginas" name="paginas" class="form-control"
                                            value='{{ old('paginas') }}'>
                                    </div>
                                    <div class="form-group">
                                        <label for="Editorial">Editorial</label>
                                        <input id="editorial" name="editorial" class="form-control"
                                            value='{{ old('editorial') }}'>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
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
  
