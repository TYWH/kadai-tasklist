@extends('layouts.app')

@section('content')

<h1>新規タスクの設定</h1>

<div class="row">
    <div class="col-6">
        {!! Form::model($task,['route' => 'tasks.store']) !!}
            <div class="form-group">
                {!! Form::label('content','内容：') !!}
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
                <!-- キーは出力、変数はドロップリスト内の表示を意味する
                 そのため、キーが未設定だと要素の配列番号が出力される -->
            </div>
            {!! Form::submit('設定',['class' => 'btn']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection

