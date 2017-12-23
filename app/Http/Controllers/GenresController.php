<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenresController extends Controller
{
	protected function show($genre){

		$movies = Movie::getAllMovies()->where('genre',$genre);

		return view('movies.index',compact("movies"));
	}
}
