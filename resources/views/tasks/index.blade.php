@extends('layouts.app')

@section('content')
    @if(Auth::check())
        <h1>タスクリスト</h1>
        @if(count($tasks) > 0)
            {{-- Bootstrapのtableは、セルに入ってる文字列のサイズによって、各列の横幅比を決定する。 --}}
            {{-- そのため、記述内容の長さと、閲覧環境によっては、酷く不格好な表が出来あがってしまう欠点が存在する --}}
            <table class="mt-4 table table-stripped table-bordered">
                <thead>
                    <tr>
                        <th>タスク番号</th>
                        <th>内容</th>
                        <th>状況</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{!! link_to_route('tasks.show',$task->id,['id' => $task->id]) !!}</td>
                            <td>{{ $task->content }}</td>
                            <td>{{ $task->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        {!! link_to_route('tasks.create','新規タスクの設定',[],['class' => 'btn btn-primary']) !!}
    @else
        <div class="jumbtron">
            <div class="text-center">
                <h1>Welcome to tasklist!</h1>
                {!! link_to_route("signup.get","Sign up now!",[],["class" => "btn btn-primary btn-lg"]) !!}
            </div>
        </div>
    @endif
@endsection
