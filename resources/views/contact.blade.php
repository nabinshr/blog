@extends('layout.app')
@section('content')
<h1>contact</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
            {{ Form::label('name', 'Name')}}
            {{ Form::text('name', '',['class'=>'form-control','placeholder'=>'Enter name'])}}
    </div>
    <div class="form-group">
            {{ Form::label('email', 'E-Mail Address')}}
            {{ Form::text('email', '',['class'=>'form-control','placeholder'=>'Enter email'])}}
    </div>
    <div class="form-group">
            {{ Form::label('message', 'message')}}
            {{Form::textarea('email','',['class'=>'form-control','placeholder'=>'Enter message'])}}
    </div>
    <div>
        {{form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection