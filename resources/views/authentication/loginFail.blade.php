@extends('layouts.master')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <div class="row">
        <div class ="col-md-6.col-md-offset-3">
            <div class="panel pnael-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Login </h3>
                    <h3 class="panel-title" color="red">error de datos</h3>
                </div>

                <div class=" panel-body">
                    <form action="login" method="post">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i> </span>
                                <input type="email" name="email" class="form-control" placeholder="example@example.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i> </span>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-success pull-right">

                        </div>
                    </form>
                </div>

            </div>

        </div>]
    </div>


@endsection
