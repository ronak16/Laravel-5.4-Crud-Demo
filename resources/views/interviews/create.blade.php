@extends('layout')

@section('content')
@include('title')
	<div class="col-sm-12 col-xs-12 right-sidebar">
		<h2>Add Interview</h2>
		<hr>
		@include('interviews.partials.errors')
		{!! Form::open(['route' => 'interviews.store']) !!}
			@include('interviews.partials.form')
		{!! Form::close() !!}
	</div>
@endsection