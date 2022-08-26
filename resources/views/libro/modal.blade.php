<div class="modal fade" id="modal-delete-{{ $lib->ISBN }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form action="{{ route('libro.destroy',$lib->ISBN) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminación de libro</h5>
                </div>
                <div class="modal-body">
                    ¿ desea eliminar el libro: {{ $lib->Nombre }}? si existen reservas con este libro tambien se
                    eliminará
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submmit" class="btn btn-primary">Eliminar</button>
                </div>
            </div>
        </div>
    </form>
</div>