@extends('layouts.master')

@section('title')
    SMDb :: Add new movie
@endsection

@section('content')
    <h2 class="blog-post-title">Add new movie</h2>

    <form method="POST" action="{{ route('store') }}">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title"/>
            @if($errors->has('title'))
                @foreach($errors->get('title') as $error)
                    <div class="alert alert-dismissible alert-danger mt-3">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            <label for="title">Year</label>
            <input type="text" class="form-control" id="year" name="year"/>
            @if($errors->has('year'))
                @foreach($errors->get('year') as $error)
                    <div class="alert alert-dismissible alert-danger mt-3">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            <label for="title">Director</label>
            <input type="text" class="form-control" id="director" name="director"/>
            @if($errors->has('director'))
                @foreach($errors->get('director') as $error)
                    <div class="alert alert-dismissible alert-danger mt-3">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            <label for="title">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre"/>
            @if($errors->has('genre'))
                @foreach($errors->get('genre') as $error)
                    <div class="alert alert-dismissible alert-danger mt-3">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{ $error }}
                    </div>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            <label for="body">Storyline</label>
            <textarea class="form-control" id="storyline" name="storyline"></textarea>
            @if($errors->has('storyline'))
                @foreach($errors->get('storyline') as $error)
                <div class="alert alert-dismissible alert-danger mt-3">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ $error }}
                </div>
                @endforeach
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection