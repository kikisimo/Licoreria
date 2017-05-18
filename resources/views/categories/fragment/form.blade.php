<div class="form-group">
    {!!   Form::label ('category','Nombre de la Categoria')!!}
    {!! Form::text('category',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('description','descripcion de la Categoria')!!}
    {!! Form::text('description',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
            {!! Form::submit('ENVIAR', ['class' => 'btn btn-primary' ]) !!}
</div>