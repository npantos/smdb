<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $guarded = ['id'];

	public function movie(){
		return $this->belongsTo(Movie::class);

	}
}
