@extends('index')

@section('content2')
<div class="col-sm-6">
    <h1>Biblioteca Virtual-Datos de {{ $users->name }}</h1>
</div>
@endsection
@section('content3')
<!-- End Breadcrumbbar -->
<!-- Start col -->
<div class="row">
    <div class="container-flat-form">
        <div class="title-flat-form title-flat-orange">Datos</div>

        <div class="row">

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Nombre</label>
                    <input id="name" type="text" class="form-control" readonly value="{{ $users->name }}">
                </div>
            </div>

            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                <div class="form-group">
                    <label>Correo Eléctronico</label>
                    <input id="email" type="email" class="form-control" readonly value=" {{ $users->email }}">
                </div>
            </div>

        </div>
    </div>
</div>
@endsection