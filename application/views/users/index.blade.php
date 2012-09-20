@layout('master')

@section('main')
	<h2>Submit this form</h2>
	{{ Form::open() }}
		{{ Form::label('name', 'Your name:') }}
		{{ Form::text('name') }}
		{{ Form::submit('Submit the form') }}
	{{ Form::close() }}
@endsection