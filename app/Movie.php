<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
	protected $guarded = ['id'];

	public static function getAllMovies(){
		return self::get();
	}

	public static function getSingleMovie($id){
		return self::find($id);
	}

}
