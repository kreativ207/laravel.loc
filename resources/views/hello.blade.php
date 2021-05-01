@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Hello - {{$name}}</h1>
    {{--    <h1 class="display-4">Hello - {{($name == "Nikolay") ? $lastName : $name}}</h1>--}}
    </div>
    @if(isset($skills) && count($skills) > 0)
        <ul class="list-group">
            @foreach($skills as $skill)
                <li class="list-group-item">{{$skill}}</li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-danger" role="alert">
            You have not skills
        </div>
    @endif
@endsection
