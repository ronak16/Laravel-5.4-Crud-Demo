<div class="form-group">
	{!! Form::label('Name', 'Name') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('Email', 'Email') !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
	{!! link_to_route('peoples.index', $title = 'Cancel', $parameters = array(), $attributes = array('class' => 'btn btn-default')) !!}
</div>