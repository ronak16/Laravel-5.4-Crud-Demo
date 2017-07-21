@extends('layout')

@section('content')
@include('title')
<div class="col-sm-12 col-xs-12 right-sidebar">
	<h2>
		Peoples
		<a href="{{ route('interviews.create') }}" class="btn btn-primary pull-right add-interview">Add Interview</a>
		<a href="{{ route('peoples.create') }}" class="btn btn-primary pull-right add-people">Add People</a>
	</h2>
	<hr>
	@include('peoples.partials.info')
	<table class="table table-hover table-bordered table-responsive">
		<thead>
			<tr>
				<th>Sr. No</th>
				<th>Name</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@php ($i = 1)
			@if(count($peoples) > 0)
				@foreach($peoples as $people)
				<tr>
					<td>{{ $i }}</td>
					<td>{{ $people->name }}</td>
					<td>{{ $people->email }}</td>
					<td width="20px">
						<a href="{{ route('peoples.edit', $people->id) }}" class="btn btn-default">
							Edit
						</a>
					</td>
					<td width="20px">
						{!! Form::open(['route' => ['peoples.destroy', $people->id], 'method' => 'DELETE','class' => 'delete-people-form-'.$people->id]) !!}
						<button class="btn btn-danger delete-people" rel="{{ $people->id }}">
							Delete
						</button>							
						{!! Form::close() !!}
					</td>
				</tr>
				@php ($i++)
				@endforeach
			@else
				<tr>
					<td colspan="4" class="text-center"> No People Available.</td>
				</tr>
			@endif	
		</tbody>
	</table>
	{!! $peoples->render() !!}
</div>
@endsection