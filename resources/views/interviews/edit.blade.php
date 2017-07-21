@extends('layout')

@section('content')
@include('title')
	<div class="col-sm-12 col-xs-12 right-sidebar">
		<h2>Edit Interview</h2>
		<hr>
		@include('interviews.partials.errors')
		{!! Form::model($interview, ['route' => ['interviews.update', $interview->id], 'method' => 'PUT']) !!}
		{!! Form::hidden('id', $interview->id) !!}
		@include('interviews.partials.form')
		{!! Form::close() !!}
	</div>
@endsection