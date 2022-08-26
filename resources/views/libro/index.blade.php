@extends('index')

@section('content2')
<div class="col-sm-6">
    <h1>Biblioteca Virtual-Listado de Libros</h1>
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
                        <th class="div-table-cell">Nombre</th>
                        <th class="div-table-cell">Autor</th>
                        <th class="div-table-cell">Página</th>
                        <th class="div-table-cell">Reservado</th>
                        <th class="div-table-cell">Visualizar</th>
                        <th class="div-table-cell">Actualizar</th>
                        <th class="div-table-cell">Eliminar</th>
                    </tr>
                </thead>

                @foreach ($libros as $lib )
                <tr class="div-table-row">
                    <th class="div-table-cell">{{ $lib->ISBN }}</th>
                    <th class="div-table-cell">{{ $lib->Nombre }}</th>
                    <th class="div-table-cell">{{ $lib->Autor}}</th>
                    <th class="div-table-cell">{{ $lib->Páginas }}</th>
                    <th class="div-table-cell">
                        @if ($lib->Estado==0)
                        No reservado
                        @else
                        Reservado
                        @endif
                    </th>
                    <th class="div-table-cell">
                        <a href="{{ route('libro.show',$lib->ISBN)}}"> <button class="btn btn-primary"><i
                                    class="zmdi zmdi-eye"></i></button> </a>
                    </th>
                    <th class="div-table-cell">
                        <a href="{{ route('libro.edit',$lib->ISBN)}}"> <button class="btn btn-success"><i
                                    class="zmdi zmdi-refresh"></i></button> </a>
                    </th>
                    <th class="div-table-cell">
                        <a href="" data-target="#modal-delete-{{ $lib->ISBN }}" data-toggle="modal">
                            <button class="btn btn-danger"><i class="zmdi zmdi-delete"></i></button>
                        </a>
                    </th>
                </tr>
                @include('libro.modal')
                @endforeach
            </table>
        </div>
    </div>

    {{ $libros->links() }}
</div>
@endsection