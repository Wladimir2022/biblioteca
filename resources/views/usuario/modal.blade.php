<div class="modal fade" id="modal-delete-{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <form action="{{ route('usuario.destroy',$user->id) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminación de usuario</h5>
                </div>
                <div class="modal-body">
                    ¿ desea eliminar el usuario: {{ $user->name }}? si existen reservas con este usuario tambien se
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