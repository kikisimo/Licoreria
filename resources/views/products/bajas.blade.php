<?php
/**
 * Created by PhpStorm.
 * User: Kikisimo
 * Date: 5/3/2017
 * Time: 11:15 PM
 */
@extends('layout')

@section('content')

<div class="col-sm-8">
        <h2>
Productos
            <a href="{{ route('products.create') }}" class="btn btn-primary pull-right"->Buscar</a>
        </h2>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">Codigo</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Contenido</th>
                    <th>Fecha</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
@foreach($products as $product)
    <tr>
        <td> {{ $product->cod_prod }}</td>
        <td> {{ $product->name }}</td>
        <td> {{ $product->brand }}</td>
        <td> {{ $product->content }}</td>
        <td> {{ $product->due_date }}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
