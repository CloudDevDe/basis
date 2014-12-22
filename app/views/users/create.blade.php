@extends('layouts.master')

@section('content')

@section ('title')
    Benutzer anlegen
@stop

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'users')) }}

    <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('password', 'Passwort') }}
        {{ Form::password('password', Input::old('password'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop