<div class="form-group">
    {!!   Form::label ('name','Nombre del cliente')!!}
    {!! Form::text('name',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('lastname','Apellido')!!}
    {!! Form::text('lastname',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('nit','NIT')!!}
    {!! Form::text('nit',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('phone','Telefono')!!}
    {!! Form::text('phone',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('e_mail','Correo')!!}
    {!! Form::text('e_mail',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary' ]) !!}
</div>