
<div class="form-group">
    {!!   Form::label ('type','Nombre del tipo de bebida')!!}
    {!! Form::text('type',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('description','Descripción de la bebida')!!}
    {!! Form::text('description',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary' ])!!}
</div>
