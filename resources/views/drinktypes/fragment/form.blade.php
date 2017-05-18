
<div class="form-group">
    {!!   Form::label ('type','Nombre del Tipo de Bebida')!!}
    {!! Form::text('type',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('description','descripcion de la Bebida')!!}
    {!! Form::text('description',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
            {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary' ]) !!}
</div>
