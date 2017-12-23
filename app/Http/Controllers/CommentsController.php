<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
	protected function comments(Request $request){

		$this->validate(request(),[
			'comment' =>'required'
		]);

		Comment::create($request->all());
		return redirect(route('movies',['id'=>request('movie_id')]));
	}
}
