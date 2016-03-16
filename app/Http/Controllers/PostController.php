<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;

class PostController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$posts = Post::All();

    	return view('posts.index', ['posts' => $posts]);
    }

    public function save($user)
    {
    	// 
    }

    public function create()
    {
    	//
    }
}
