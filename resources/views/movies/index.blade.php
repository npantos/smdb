@extends('layouts.master')

@section('title')
Welcome to Serbian Movie Data Base
@endsection

@section('content')

    <div class="row">
        <div class="col-8">
            @foreach ($movies as $movie)
                <div class="jumbotron mb-5">
                    <h1><a href="{{ route('movies',['id'=>$movie->id]) }}">{{$movie->title}}</a></h1>
                    <p>{{substr($movie->storyline,0,100)}}...</p>
                    <a href="{{ route('movies',['id'=>$movie->id]) }}" class="btn btn-primary float-right">Read More</a>
                </div>
            @endforeach
        </div>
        <div class="col-4">
            <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">Last 5 Movies</div>
                <div class="card-body" style="background: #fff">

                    @foreach ($last_movies as $movie)
                        <p class="card-title"><a href="{{ route('movies',['id'=>$movie->id]) }}">{{$movie->title}}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection