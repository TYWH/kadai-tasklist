@extends('layouts.app')

@section('content')
    <h1 class = "text-center">Log in</h1>
    {!! Form::open(['route' => 'login.post']) !!}
        <div class="form-group">
            {!! Form::label('email','Email') !!}
            {!! Form::email('email',old('email'),['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('password','Password') !!}
            {!! Form::password('password',['class' => 'form-control']) !!}
        </div>
        
        {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
        <p class="mt-2">New user? {!! link_to_route('signup.get','Sign up now!') !!}</p>
    {!! Form::close() !!}
@endsection