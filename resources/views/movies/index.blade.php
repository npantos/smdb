@extends('layouts.master')

@section('title')
Welcome to Serbian Movie Data Base
@endsection

@section('content')
    @foreach ($movies as $movie)
        <div class="jumbotron mb-5">
            <h1><a href="{{ route('movies',['id'=>$movie->id]) }}">{{$movie->title}}</a></h1>
            <p>{{substr($movie->storyline,0,100)}}...</p>
            <a href="{{ route('movies',['id'=>$movie->id]) }}" class="btn btn-primary float-right">Read More</a>
        </div>
    @endforeach
@endsection