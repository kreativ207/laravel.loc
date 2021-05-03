@extends('layouts.app')

@section('content')
    @if(isset($laravel) && count($laravel) > 0)
        <ul class="list-group">
            @foreach($laravel as $lar)
                <li class="list-group-item">{{$lar}}</li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-danger" role="alert">
            You array is empty
        </div>
    @endif
@endsection
