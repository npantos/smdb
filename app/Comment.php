<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $guarded = ['id'];

	// U Comment modelu se definiše statički properties $validation da se ne stavlja validacija za svaki store
	public static $validation = [
		'title' => 'required',
		'director' => 'required',
		'genre' => 'required',
		'year' => 'nullable|digits:4|integer|min:1900|max:2017',
		'storyline' =>'max:1000'
	];

	public function movie(){
		return $this->belongsTo(Movie::class);

	}
}
