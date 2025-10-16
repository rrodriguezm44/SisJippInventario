@extends('adminlte::page')

@section('content_header')
    <nav aria-label="breadcrumb" style="font-size: 18pt">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/admin/categorias') }}">Categorias</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear Categorias</li>
        </ol>
    </nav>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"><b>Categorias Registradas</b></h3>
                    <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" style="display: block;">
                    <form action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre de la Categoria</label>
                                    <input type="text" class="form-control" id="nombre" placeholder="Nombre de la Categoria" name="nombre">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="descripcion">Descripcion de la Categoria</label>
                                    <textarea class="form-control" id="descripcion" placeholder="Descripcion de la Categoria" name="descripcion">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
