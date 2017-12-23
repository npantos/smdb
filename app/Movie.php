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
		return self::with('comments')->find($id);
	}

	public function comments(){
		return $this->hasMany(Comment::class)->orderBy('created_at', 'DESC');
	}

}
