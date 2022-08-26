<div class="modal fade" id="modal-delete-{{ $lib->r_id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form action="{{ route('reserva.destroy',$lib->r_id) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminación de libro</h5>
                </div>
                <div class="modal-body">
                    ¿ desea eliminar el la reserva número: {{ $lib->r_id }}? el libro de esta reserva volverá a estar
                    como no reservado.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submmit" class="btn btn-primary">Eliminar</button>
                </div>
            </div>
        </div>
    </form>
</div>