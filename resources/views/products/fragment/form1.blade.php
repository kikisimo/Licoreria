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
    {!!   Form::label ('due_date','Fecha de Ingreso del Producto')!!}
    {!! Form::date('due_date',null, ['class' => 'form-control' ]) !!}
</div>

<div class="form-group">
    <label for="">Categoria</label>
    <select name="cod_cat" id="inputcod_cat" class="form-control">
        <option value="">--escoja la categoria--</option>
        @foreach($categories as $category)
            <option value="{{ $category ['cod_cat'] }}">{{ $category ['category']}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Tipo</label>
    <select name="cod_dt" id="inputcod_dt" class="form-control">
        <option value="">--escoja el tipo de Producto--</option>
        @foreach($drinktypes as $drinktype)
            <option value="{{ $drinktype ['cod_dt'] }}">{{ $drinktype ['type']}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary' ]) !!}
</div>