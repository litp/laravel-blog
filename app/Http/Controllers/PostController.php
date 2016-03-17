<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
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
    	$posts = Auth::user()->posts()->get();

    	return view('posts.index', ['posts' => $posts]);
    }

    public function create(Request $request)
    {
        $post = '';

        //return view('')
    }

    public function edit($slug)
    {
    	$post = Auth::user()->posts()->where('slug',$slug)->first();

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $slug)
    {
    	if ($request->isMethod('post')) {
            $post = Auth::user()->posts()->where('slug', $slug)->first();


        }
    }
}
