@extends('index')

@section('content2')
<div class="col-sm-6">
    <h1>Biblioteca Virtual-Datos de {{ $libros->Nombre }}</h1>
</div>
@endsection
@section('content3')
<div class="row">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-orange">DATOS</div>

        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Código o Numeración del Libro</label>
                    <input type="text" readonly value="{{ $libros->ISBN }} " class="form-control">


                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Nombre del Libro</label>
                    <input type="text" readonly value="{{ $libros->Nombre }}" class="form-control">


                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Autor del libro</label>
                    <input type="text" readonly value="{{ $libros->Autor }}" class="form-control">


                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Número de Páginas</label>
                    <input type="text" readonly value="{{ $libros->Páginas }}" class="form-control">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection