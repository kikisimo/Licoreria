
<div class="form-group">
    {!!   Form::label ('name','Nombre del proveedor')!!}
    {!! Form::text('name',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('short','Teléfono')!!}
    {!! Form::text('phone',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('short','Correo')!!}
    {!! Form::text('e_mail',null, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
    {!!   Form::label ('short','Dirección')!!}
    {!! Form::text('address',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('body','Observaciones')!!}
    {!! Form::text('observation',null, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary' ]) !!}
</div>
