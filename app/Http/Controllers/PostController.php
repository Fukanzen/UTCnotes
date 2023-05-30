<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id){
        $books = Book::all();

        return view("homepage", compact("books"));
    }

    public function show($id){
        $book = Book::find($id);

        return view("BookDetail", compact("book"));
    }
}
