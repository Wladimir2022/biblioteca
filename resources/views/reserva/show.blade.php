@extends('index')

@section('content2')
<div class="col-sm-6">
    <h1>Biblioteca Virtual-Datos de Reservación numero: {{ $reservas->r_id }}</h1>
</div>
@endsection
@section('content3')
<div class="row">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-orange">DATOS</div>

        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Código de reserva</label>
                    <input type="text" readonly value="{{ $reservas->r_id }} " class="form-control">


                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Nombre del usuario</label>
                    <input type="text" readonly value="{{ $reservas->name }}" class="form-control">


                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Nombre del Libro</label>
                    <input type="text" readonly value="{{ $reservas->Nombre }}" class="form-control">


                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Fecha de reservación</label>
                    <input type="text" readonly value="{{ $reservas->fecha }}" class="form-control">

                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>días reservados</label>
                    <input type="text" readonly value="{{ $reservas->dias }}" class="form-control">

                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Fecha de devolución</label>
                    <input type="text" readonly value="{{ $reservas->FechaFinal }}" class="form-control">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection