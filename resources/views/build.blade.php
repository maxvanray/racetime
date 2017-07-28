@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Build a Race</div>

                    <div class="panel-body">


                        <div class="panel panel-default">
                            <div class="panel-heading">Race Information</div>
                            <div class="panel-body">
                                {!! Form::open(['route' => 'race']) !!}

                                    <div class="form-group">
                                        {{ Form::label('name', null, ['class' => 'control-label']) }}
                                        {{ Form::text('name', null, array_merge(['class' => 'form-control'])) }}
                                    </div>

                                    {!! Form::submit('Create') !!}

                                {!! Form::close() !!}

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