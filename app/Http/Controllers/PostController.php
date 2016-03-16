<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function savePost()
    {
    	return view('posts.posts');
    }

    public function showPost($user)
    {
    	// 
    }

    public function createPost()
    {
    	//
    }
}
