@extends('layouts.master')

@section ('title')
    Profil
@stop

@section ('content')

<div class="box box-primary">
    <div class="box-header">
<br>
    </div>

        <h2>{{ $user->username }}</h2>
        <p>
            <strong>Email:</strong> {{ $user->email }}<br>
        </p>

@stop