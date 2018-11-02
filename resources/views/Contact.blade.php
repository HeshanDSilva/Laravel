@extends('layout.app')

@section('content')
<h1>Contact</h1>
{!! Form::open(['url' => 'Contact/submit']) !!}

<div class="form-group">
   {{Form::label('name', 'Name')}}
   {{Form::text('name','',['class' => 'form-control', 'placeholder'=>'Enter the name'])}}

</div>

<div class="form-group">
   {{Form::label('email', 'E-Mail')}}
   {{Form::text('email', '',['class' => 'form-control', 'placeholder'=>'Enter the email'])}}

</div>
<div class="form-group">
   {{Form::label('message', 'Message')}}
   {{Form::textarea('message', '',['class' => 'form-control', 'placeholder'=>'Enter the message'])}}

</div>
<div>
	{{Form::submit('Submit',['class' => 'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection

@section('sidebar')
@parent
<h2>This Contact page</h2>
@endsection 