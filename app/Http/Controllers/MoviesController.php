<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;

class MoviesController extends Controller
{
	protected function index(){
		$movies = Movie::getAllMovies();
		$last_movies = Movie::getAllMovies()->take(5);
		return view('movies.index',compact("movies",'last_movies'));
	}

	protected function show($id){
		$movies = Movie::getSingleMovie($id);

		return view('movies.show',compact("movies"));
	}

	protected function create(){

		return view('movies.create');
	}

	protected function store(Request $request){

		// U Comment modelu se definiše statički properties $validation da se ne stavlja validacija za svaki store
		$this->validate(request(),Comment::$validation);


		Movie::create($request->all());
		return $this->index();
	}
}
