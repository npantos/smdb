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
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" />
            @include('partials.error', ['key' => 'title'])
        </div>

        <div class="form-group">
            <label for="year">Year</label>
            <input type="text" class="form-control" id="year" name="year" value="{{ old('year') }}" />
            @include('partials.error', ['key' => 'year'])
        </div>

        <div class="form-group">
            <label for="director">Director</label>
            <input type="text" class="form-control" id="director" name="director" value="{{ old('director') }}" />
            @include('partials.error', ['key' => 'director'])
        </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre') }}" />
            @include('partials.error', ['key' => 'genre'])
        </div>

        <div class="form-group">
            <label for="storyline">Storyline</label>
            <textarea class="form-control" id="storyline" name="storyline">{{ old('storyline') }}</textarea>
            @include('partials.error', ['key' => 'storyline'])
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection