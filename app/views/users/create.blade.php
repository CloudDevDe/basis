@extends('layouts.master')

@section ('title')
    Benutzer anlegen
@stop

@section ('content')

<div class="box box-primary">
    <div class="box-header">
<br>
    </div>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'users', 'class' => 'form-horizontal')) }} 

    <div class="form-group">
        {{ Form::label('username', 'Benutzername', ['class' => 'col-sm-1 control-label']) }}
        <div class="col-sm-6">
        {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email', ['class' => 'col-sm-1 control-label']) }}
        <div class="col-sm-6">
        {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Passwort', ['class' => 'col-sm-1 control-label']) }}
        <div class="col-sm-6">
        {{ Form::text('password', Input::old('password'), array('class' => 'form-control')) }}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-6">
            {{ Form::submit('Anlegen', ['class' => 'btn btn-default']) }}
        </div>
    </div>

{{ Form::close() }}
<br>

@stop