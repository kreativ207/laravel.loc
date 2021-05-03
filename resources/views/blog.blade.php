@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Articles</h1>
        <div class="list-group">
            @if(count($articles) == 0)
                <p>Blog not found</p>
            @endif
            @foreach($articles as $article)
                <a href="/article/{{$article->id}}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$article->title}}</h5>
                        <small>{{$article->created_at->format("d.m.Y")}}</small>
                    </div>
                    <p class="mb-1">{{$article->body}}</p>
                </a>
            @endforeach
        </div>
    </div>
@endsection
