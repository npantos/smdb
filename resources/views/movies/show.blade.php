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
                <h4>Director: {{$movies->director}}</h4>
                <h4>Genre: <a href="{{ route('genre',['genre'=>$movies->genre]) }}">{{$movies->genre}}</a></h4>
                <h4>Year: {{$movies->year}}</h4>
            </div>
        </div>

        <p>&nbsp;</p>
        <p>{{$movies->storyline}}</p>
    </div>



    <form method="POST" action="{{ route('comments') }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="body">Comments</label>
            <textarea class="form-control" id="comment" name="comment"></textarea>

        </div>
        <input type="hidden" name="movie_id" value="{{$movies->id}}">


        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>


    </form>
    @foreach ($movies->comments as $comment)

        <div class="card border-dark mb-3">
            <div class="card-header">{{$comment->created_at}}</div>
            <div class="card-body">
                <p class="card-text">{{$comment->comment}}</p>
            </div>
        </div>

    @endforeach

@endsection



