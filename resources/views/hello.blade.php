@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Hello - {{($name == "Nikolay") ? $lastName : $name}}</h1>
{{--    <h1 class="display-4">Hello - {{($name == "Nikolay") ? $lastName : $name}}</h1>--}}
</div>
@endsection
