@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Students</h1>
    </div>
    <ul class="list-group mt-4">
        @if(is_object($students) or is_array($students))
            @foreach($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div>
                        {{$student->last_name}}
                        <p style="font-size: 12px; color: #718096">{{$student->first_name}}</p>
                    </div>
                    <span class="badge badge-primary badge-pill">{{$student->age}}</span>
                    <span class="badge badge-primary badge-pill">{{$student->group_number}}</span>
                    <span class="badge badge-primary badge-pill">{{$student->course_number}}</span>
                    <div>
                        {{$student->specialty}}
                    </div>
                </li>
            @endforeach
        @endif
    </ul>
@endsection
