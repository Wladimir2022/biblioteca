@extends('index')

@section('content2')
<div class="col-sm-6">
    <h1>Biblioteca Virtual-Listado de Reservas</h1>
</div>
@endsection
@section('content3')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr class="div-table-row div-table-head">
                        <th class="div-table-cell">Código</th>
                        <th class="div-table-cell">Usuario</th>
                        <th class="div-table-cell">Libro</th>
                        <th class="div-table-cell">Fecha de reservación</th>
                        <th class="div-table-cell">Dias reservados</th>
                        <th class="div-table-cell">Fecha de devolución</th>
                        <th class="div-table-cell">Visualizar</th>
                        <th class="div-table-cell">Actualizar</th>
                        <th class="div-table-cell">Eliminar</th>
                    </tr>
                </thead>

                @foreach ($reservas as $lib )
                <tr class="div-table-row">
                    <th class="div-table-cell">{{ $lib->r_id }}</th>
                    <th class="div-table-cell">{{ $lib->name }}</th>
                    <th class="div-table-cell">{{ $lib->Nombre}}</th>
                    <th class="div-table-cell">{{ $lib->fecha }}</th>
                    <th class="div-table-cell">{{ $lib->dias }}</th>
                    <th class="div-table-cell">{{ $lib->FechaFinal }}</th>

                    <th class="div-table-cell">
                        <a href="{{ route('reserva.show',$lib->r_id)}}"> <button class="btn btn-primary"><i
                                    class="zmdi zmdi-eye"></i></button> </a>
                    </th>
                    <th class="div-table-cell">
                        <a href="{{ route('reserva.edit',$lib->r_id)}}"> <button class="btn btn-success"><i
                                    class="zmdi zmdi-refresh"></i></button> </a>
                    </th>
                    <th class="div-table-cell">
                        <a href="" data-target="#modal-delete-{{ $lib->r_id }}" data-toggle="modal">
                            <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                        </a>
                    </th>
                </tr>
                @include('reserva.modal')
                @endforeach
            </table>
        </div>
    </div>

    {{ $reservas->links() }}
</div>
@endsection