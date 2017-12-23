@extends('layouts.master')

@section('title')
    SMDb :: {{$movies->title}}
@endsection

@section('content')
    <div class="jumbotron">

        <h1>{{$movies->title}}</h1>
        <p>&nbsp;</p>
        <div class="row">
            <div class="col-6"><img src="/images/movie-dummy.jpeg" alt="" class="img-fluid"></div>
            <div class="col-6">
                <p>Director: {{$movies->director}}</p>
                <p>Genre: {{$movies->genre}}</p>
                <p>Year: {{$movies->year}}</p>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>{{$movies->storyline}}</p>
    </div>
<div>

@endsection



