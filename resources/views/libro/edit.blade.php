@extends('index')

@section('content2')
<div class="col-sm-6">
    <h1>Biblioteca Virtual-Editar libro: {{ $libros->Nombre }}</h1>
</div>
@endsection
@section('content3')
<div class="row">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-orange">Editar Libro</div>
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
        {!! Form::model($libros,['method'=>'PATCH','route'=>['libro.update',$libros->ISBN]]) !!}
        {{ Form::token() }}
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Código o Numeración del Libro</label>
                    <input type="text" name="código" class="form-control" value="{{ old('código',$libros->ISBN) }}"
                        placeholder="Código Libro" data-toggle="tooltip" data-placement="top"
                        title="Escribe el código o numeración del libro">


                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Nombre del Libro</label>
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre',$libros->Nombre) }}"
                        placeholder="Nombre del libro" data-toggle="tooltip" data-placement="top"
                        title="Escribe el nombre del libro">


                </div>
            </div>
            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Autor del libro</label>
                    <input type="text" name="autor" class="form-control" value="{{ old('autor',$libros->Autor) }}"
                        placeholder="Autor del libro" data-toggle="tooltip" data-placement="top"
                        title="Escribe el autor del libro">


                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Número de Páginas</label>
                    <input type="number" name="paginas" min="1" step="1" value="{{ old('paginas',$libros->Páginas) }}"
                        class="form-control" placeholder="Páginas del libro" data-toggle="tooltip" data-placement="top"
                        title="páginas del libro">

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