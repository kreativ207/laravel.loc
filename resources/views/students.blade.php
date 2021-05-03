@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Students</h1>
    </div>
        @if(is_object($students) or is_array($students))
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Фамилия Имя</th>
                    <th scope="col">Возраст</th>
                    <th scope="col">Номер групы</th>
                    <th scope="col">Номер курса</th>
                    <th scope="col">Специальность</th>
                    <th scope="col">Link ДЗ</th>
                </tr>
                </thead>

            @php
                $i = 1
            @endphp
            @foreach($students as $student)
                <tbody>
                <tr>
                    <th scope="row">{{$i}}</th>
                    <td>{{$student->last_name}}, {{$student->first_name}}</td>
                    <td>{{$student->age}}</td>
                    <td>{{$student->group_number}}</td>
                    <td>{{$student->course_number}}</td>
                    <td>{{$student->specialty}}</td>
                    <td>
                        @foreach($student->linkWork as $link)
                            {{$link->link}} ||
                        @endforeach
                    </td>
                </tr>
                @php
                    $i += 1
                @endphp
            @endforeach
            </table>
        @endif
@endsection
