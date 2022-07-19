<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class Pagecontroller extends Controller
{
    public function index(){
        $post = Post::with('tags')->paginate(3);

        return response()->json($post);
    }

    public function show($slug){
        $post = Post::where('slug',$slug)->with('tags')->first();

        return response()->json($post);
    }
}
