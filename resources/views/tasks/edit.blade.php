@extends('layouts.app')

@section('content')

<h1>タスク番号{{ $task->id }}番のタスク内容編集ページ</h1>

<div class="row">
    <div class="col-6">
        {!! Form::model($task,['route' => ['tasks.update', $task->id],'method' => 'put']) !!}
            
            <div class="form-group">
                {!! Form::label('content','タスク内容') !!}
                {!! Form::text('content',null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('status','タスク状況：') !!}
                {!! Form::select('status',[
                '未' => '未',
                '済' => '済',
                '優先順位高' => '優先順位高',
                '優先順位中' => '優先順位中',
                '優先順位低' => '優先順位低'
                ]) !!}
            </div>
            
            {!! Form::submit('更新',['class' => 'btn btn-light']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection
