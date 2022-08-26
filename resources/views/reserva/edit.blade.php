@extends('index')

@section('content2')
<div class="col-sm-6">
    <h1>Biblioteca Virtual-Editar Reservación número: {{ $reservas->r_id }}</h1>
</div>
@endsection
@section('content3')
<div class="row">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-orange">Editar reserva</div>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
        @endif
        {!! Form::model($reservas,['method'=>'PATCH','route'=>['reserva.update',$reservas->r_id]]) !!}
        {{ Form::token() }}
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Usuario</label>
                    <select name="user" class="form-control" data-toggle="tooltip" data-placement="top"
                        title="Seleccione Usuario">
                        <option value="" disabled="" selected="">Seleccione usuario: </option>
                        @foreach ($users as $r)
                        @if(old('user',$reservas->user)==$r->id)
                        <option value="{{ old('user',$r->id) }}" selected>
                            {{ $r->name }}
                        </option>
                        @else
                        <option value="{{ old('user',$r->id) }}">{{ $r->name }}
                        </option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Libro</label>
                    <select name="libro" class="form-control" data-toggle="tooltip" data-placement="top"
                        title="Seleccione Libro">
                        <option value="" disabled="" selected="">Seleccione libro: </option>
                        <option value="{{ $reservas->libros }}" selected>
                            {{ $reservas->Nombre }}
                        </option>
                        @foreach ($libros as $r)
                        @if(old('libro',$reservas->libros)==$r->ISBN)
                        <option value="{{ old('libro',$r->ISBN) }}" selected>
                            {{ $r->Nombre }}
                        </option>
                        @else
                        <option value="{{ old('libro',$r->ISBN) }}">
                            {{ $r->Nombre }}
                        </option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Fecha de reserva</label>
                    <input type="date" name="fecha" value="{{ old('fecha',$reservas->fecha) }}" class="form-control"
                        data-toggle="tooltip" data-placement="top" title="Seleccione fecha de reserva">
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Días de Reserva</label>
                    <input type="number" name="dias" min="1" step="1" value="{{ old('dias',$reservas->dias) }}"
                        class="form-control" placeholder="dias de reserva" data-toggle="tooltip" data-placement="top"
                        title="dias de reserva">

                </div>
            </div>
        </div>
        <div>
            <p class="text-center">
                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i>
                    &nbsp;&nbsp; Limpiar</button>
                <button type="submit" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp;
                    Guardar</button>
            </p>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection