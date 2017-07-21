@extends('layout')

@section('content')
@include('title')
<div class="col-sm-12 col-xs-12 right-sidebar">
	<h2>
		Interviews
		<a href="{{ route('interviews.create') }}" class="btn btn-primary pull-right add-interview">Add Interview</a>
		<a href="{{ route('peoples.create') }}" class="btn btn-primary pull-right add-people">Add People</a>
	</h2>
	<hr>
	@include('interviews.partials.info')
	<table class="table table-hover table-bordered table-responsive">
		<thead>
			<tr>
				<th>Sr. No</th>
				<th>People</th>
				<th>Date & Time</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@php ($i = 1)
			@if(count($interviews) > 0)
			@foreach($interviews as $interview)
			<tr>
				<td>{{ $i }}</td>
				<td>{{ $interview->peoplename->name }}</td>
				<td>{{ $interview->interview_date_time }}</td>
				<td width="20px">
					<a href="{{ route('interviews.edit', $interview->id) }}" class="btn btn-default">
						Edit
					</a>
				</td>
				<td width="20px">
					{!! Form::open(['route' => ['interviews.destroy', $interview->id], 'method' => 'DELETE','class' => 'delete-interview-form-'.$interview->id]) !!}
					<button class="btn btn-danger delete-interview" rel="{{ $interview->id }}">
						Delete
					</button>							
					{!! Form::close() !!}
				</td>
			</tr>
			@php ($i++)
			@endforeach
			@else
			<tr>
				<td colspan="4" class="text-center"> No interviews available.</td>
			</tr>
			@endif	
		</tbody>
	</table>
	{!! $interviews->render() !!}
</div>	
@endsection