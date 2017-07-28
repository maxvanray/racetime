@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Warning!</strong> You are logged in!
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Manage Races</div>
                        <div class="panel-body">
                            <ul>
                                <li><a href="">View Races</a></li>
                                <li><a href="{{ route('race') }}">Build a new race</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
