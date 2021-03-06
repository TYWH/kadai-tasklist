@extends('layouts.app')

@section('content')
    <h1 class="text-center">Sign up</h1>
    {!! Form::open(['route' => 'signup.post']) !!}
        <div class="form-group">
            {!! Form::label('name','Name') !!}
            {!! Form::text('name',old('name'),['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::email('email',old('email'),['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('password_confirmation','Confirmation') !!}
            {!! Form::password('password_confirmation',['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
    {!! Form::close() !!}
@endsection