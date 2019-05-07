@extends('layouts.master')

@section('title', 'Curso laravel Torres')

@section('header')
	@parent {{--para mantener los 2 header--}}
	<h1>Header desde vista Brandon</h1>
@stop

@section('content')
	<p>Contenido de la vista Brandon</p>
@stop