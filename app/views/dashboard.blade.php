@extends('layouts.master')

@section ('title')
    Dashboard
@stop

@section ('description')
<!-- Placeholder -->
@stop

@section('content')

    <div class="box-body">

    	<a href="{{ URL::to('logout') }}">Logout</a>
  
@stop