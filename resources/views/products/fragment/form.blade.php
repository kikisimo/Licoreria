<div class="form-group">
    {!!   Form::label ('name','Nombre del producto')!!}
    {!! Form::text('name',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('short','Marca')!!}
    {!! Form::text('brand',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('short','Contenido neto')!!}
    {!! Form::text('content',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary' ]) !!}
</div>