<div class="form-group">
    {!!   Form::label ('name','Nombre del producto')!!}
    {!! Form::text('name',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('brand','Marca')!!}
    {!! Form::text('brand',null, ['class' => 'form-control' ]) !!}
</div>


<div class="form-group">
    {!!   Form::label ('content','Contenido neto')!!}
    {!! Form::text('content',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('stock','Stock')!!}
    {!! Form::text('stock',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    {!!   Form::label ('price','Precio Unitario')!!}
    {!! Form::text('price',null, ['class' => 'form-control' ]) !!}
</div>


<div class="form-group">
    {!!   Form::label ('due_date','Fecha de ingreso del producto')!!}
    {!! Form::date('due_date',null, ['class' => 'form-control' ]) !!}
</div>


<div class="form-group">
    <label for="">Categoría</label>
    <select name="cod_cat" id="inputcod_cat" class="form-control">
        <option value="">--Elija la nueva categoria--</option>
        @foreach($categories as $category)
            <option value="{{ $category ['cod_cat'] }}">{{ $category ['category']}}</option>
        @endforeach
    </select>
</div>



<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary' ]) !!}
</div>