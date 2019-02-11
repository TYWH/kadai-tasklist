@extends('layouts.app')

@section('content')

<h1>新規タスクの設定</h1>

<div class="row">
    <div class="col-6">
        {!! Form::model($task,['route' => 'tasks.store']) !!}
            <div class="form-group">
                {!! Form::label('content','メッセージ：') !!}
                {!! Form::text('content',null,['class' => 'form-control']) !!}
                
                {!! Form::submit('設定',['class' => 'btn']) !!}
            </div>
        {!! Form::close() !!}
    </div>
</div>

@endsection

