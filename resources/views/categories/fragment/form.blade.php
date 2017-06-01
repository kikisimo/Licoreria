<div class="form-group">
    {!!   Form::label ('category','Nombre de la categoría')!!}
    {!! Form::text('category',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('description','Descripción de la categoría')!!}
    {!! Form::text('description',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary' ]) !!}
</div>