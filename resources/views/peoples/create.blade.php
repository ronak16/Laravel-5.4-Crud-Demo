@extends('layout')

@section('content')
@include('title')
	<div class="col-sm-12 col-xs-12 right-sidebar">
		<h2>Add People</h2>
		<hr>
		@include('peoples.partials.errors')
		{!! Form::open(['route' => 'peoples.store']) !!}
			@include('peoples.partials.form')
		{!! Form::close() !!}
	</div>
@endsection