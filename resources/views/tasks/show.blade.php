@extends('layouts.app')

@section('content')

<h1>タスク番号{{ $task->id }}番のタスク詳細ページ</h1>

<table class="table table-bordered">
    <tr>
        <th>タスク番号</th>
        <td>{{ $task->id }}</td>
    </tr>
    <tr>
        <th>内容</th>
        <td>{{ $task->content }}</td>
    </tr>
</table>

    {!! link_to_route('tasks.edit','このタスク内容を編集',['id' => $task->id], ['class' => 'btn btn-light']) !!}
    
    {!! Form::model($task,['route' => ['tasks.destroy',$task->id],'method' => 'delete']) !!}
        {!! Form::submit('このタスクを破棄',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection