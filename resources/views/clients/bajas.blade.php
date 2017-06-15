<?php
@extends('base')

@section('content')

<div class="col-sm-8">
        <h2>
Clientes
            <a href="{{ route('clients.create') }}" class="btn btn-primary pull-right"->Buscar</a>
        </h2>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th width="20px">Codigo</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>NIT</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th colspan="3">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
@foreach($clients as $client)
    <tr>
        <td> {{ $client->ci_client }}</td>
        <td> {{ $client->name }}</td>
        <td> {{ $client->lastname }}</td>
        <td> {{ $client->nit }}</td>
        <td> {{ $client->phone }}</td>
        <td> {{ $client->e_mail }}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
            </div><!-- /.box-header -->

    </div><!-- /.content-wrapper -->
