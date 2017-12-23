<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class MoviesController extends Controller
{
	protected function index(){
		$movies = Movie::getAllMovies();
		return view('movies.index',compact("movies"));
	}

	protected function show($id){
		$movies = Movie::getSingleMovie($id);

		return view('movies.show',compact("movies"));
	}
}
