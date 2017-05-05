@extends('layout')
@section('content')

    <div class="col-sm-8">
        {!!Form::model($product,['route'=>['products.update',$product],'method'=>'PUT'])!!}
        <div class="form-group">
            {!!Form::label('cod_prod','Codigo:')!!}
            {!!Form::text('cod_prod',null,['class'=>'form-control','placeholder'=>'Ingresa el codigo'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('name','Nombre:')!!}
            {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del producto'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('Brand','Marca:')!!}
            {!!Form::text('brand',null,['class'=>'form-control','placeholder'=>'Ingresa marca'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('content','Contenido neto:')!!}
            {!!Form::text('content',null,['class'=>'form-control','placeholder'=>'Ingresa contenido neto'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('due_date','Fecha:')!!}
            {!!Form::date('due_date',null,['class'=>'form-control','placeholder'=>'Ingresa contenido neto'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('cod_cat','Cod:')!!}
            {!!Form::text('cod_cat',null,['class'=>'form-control','placeholder'=>'Ingresa contenido neto'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('cod_dt','Cod:')!!}
            {!!Form::text('cod_dt',null,['class'=>'form-control','placeholder'=>'Ingresa contenido neto'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('created_at','Actualizado:')!!}
            {!!Form::date('created_at',null,['class'=>'form-control','placeholder'=>'Ingresa contenido neto'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('updated_at','Creado:')!!}
            {!!Form::date('updated_at',null,['class'=>'form-control','placeholder'=>'Ingresa contenido neto'])!!}
        </div>
        {!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
        {!!Form::close()!!}
    </div>
    @endsection