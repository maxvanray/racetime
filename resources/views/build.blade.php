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
                                        {{ Form::label('racename','Race name', ['class' => 'control-label']) }}
                                        {{ Form::text('racename', null, array_merge(['class' => 'form-control'])) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('url','Folder', ['class' => 'control-label']) }}
                                        {{ Form::text('url', null, array_merge(['class' => 'form-control'])) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('start_location','Start Location', ['class' => 'control-label']) }}
                                        {{ Form::text('start_location', null, array_merge(['class' => 'form-control'])) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('finish_location','Finish Location', ['class' => 'control-label']) }}
                                        {{ Form::text('finish_location', null, array_merge(['class' => 'form-control'])) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('starttime','Start Date and Time', ['class' => 'control-label']) }}
                                        <?php /* {{ Form::text('starttime', null, array_merge(['class' => 'form-control'])) }} */ ?>
                                        {{ Form::date('starttime', \Carbon\Carbon::now()), ['class' => 'control-label'] }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('length','Length', ['class' => 'control-label']) }}
                                        {{ Form::text('length', null, array_merge(['class' => 'form-control'])) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('description','Description', ['class' => 'control-label']) }}
                                        {{ Form::text('description', null, array_merge(['class' => 'form-control'])) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('terms','terms', ['class' => 'control-label']) }}
                                        {{ Form::text('terms', null, array_merge(['class' => 'form-control'])) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('race_manager','Race Organizer', ['class' => 'control-label']) }}
                                        {{ Form::text('race_manager', null, array_merge(['class' => 'form-control'])) }}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('race_manager_email','Contact Email', ['class' => 'control-label']) }}
                                        {{ Form::text('race_manager_email', null, array_merge(['class' => 'form-control'])) }}
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