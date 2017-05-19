
<div class="form-group">
    {!!   Form::label ('name','Nombre del proveedor')!!}
    {!! Form::text('name',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('short','Telefono')!!}
    {!! Form::text('phone',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('short','Email')!!}
    {!! Form::text('e_mail',null, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
    {!!   Form::label ('short','Adress')!!}
    {!! Form::text('address',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('body','Observaciones')!!}
    {!! Form::text('observation',null, ['class' => 'form-control' ]) !!}
</div>
<div class="form-group">
            {!! Form::submit('Guardar', ['class' => 'btn btn-primary' ]) !!}
</div>
