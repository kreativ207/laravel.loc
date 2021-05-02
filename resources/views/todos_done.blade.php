@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Todos Done</h1>
    </div>
    <a href="/todos">Все</a>
    <a href="/todos/done">Выполнены</a>
    <a href="/todos/not-done">Не Выполнены</a>
    <ul class="list-group mt-4">
        @if(is_object($todos) or is_array($todos))
            @foreach($todos as $todo)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        {{$todo->title}}
                        <p style="font-size: 12px; color: #718096">{{$todo->note}}</p>
                    </div>
                    @if($todo->status === 1)
                        <span class="badge badge-success badge-pill">Выполнено</span>
                    @else
                        <span class="badge badge-danger badge-pill">Не выполнено</span>
                    @endif
                </li>
            @endforeach
        @endif
    </ul>
@endsection
