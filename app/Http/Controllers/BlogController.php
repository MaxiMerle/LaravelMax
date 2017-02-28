<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{

	public function getIndex(){
		$posts = Post::paginate();
		return view('blog.index')->withPosts($posts);
	}


    public function getSingle($id){
    	$post = Post::where('slug')->first();
    	return view('blog.single')->withPost($post);
    }

}
