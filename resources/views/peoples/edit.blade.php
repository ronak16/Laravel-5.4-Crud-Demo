@extends('layout')

@section('content')
@include('title')
	<div class="col-sm-12 col-xs-12 right-sidebar">
		<h2>Edit People</h2>
		<hr>
		@include('peoples.partials.errors')
		{!! Form::model($people, ['route' => ['peoples.update', $people->id], 'method' => 'PUT']) !!}
		{!! Form::hidden('id', $people->id) !!}
		@include('peoples.partials.form')
		{!! Form::close() !!}
	</div>
@endsection