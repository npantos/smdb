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

	protected function create(){

		return view('movies.create');
	}

	protected function store(Request $request){

		$this->validate(request(),[
			'title' => 'required',
			'director' => 'required',
			'genre' => 'required',
			'year' => 'required',
			'storyline' =>'required'
		]);


		Movie::create($request->all());
		return $this->index();
	}
}
