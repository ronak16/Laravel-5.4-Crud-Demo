<div class="form-group">
	{!! Form::label('People', 'Select People') !!}
	{!! Form::select('people',$peoples,isset($interview->people)?$interview->people:null,['class' => 'form-control']) !!}

</div>
<div class="form-group">
	{!! Form::label('Date Time', 'Date & Time') !!}
	{!! Form::text('interview_date_time', null, ['class' => 'form-control','id' => 'datetimepicker','readonly']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
	{!! link_to_route('interviews.index', $title = 'Cancel', $parameters = array(), $attributes = array('class' => 'btn btn-default')) !!}
</div>