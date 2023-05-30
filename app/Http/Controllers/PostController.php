<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id){
        $post = Post::all();

        return view("homepage")-> with("curr", $post);
    }

    public function show($id){
        $book = Post::find($id);

        return view("postdetail", compact("post"));
    }
}
