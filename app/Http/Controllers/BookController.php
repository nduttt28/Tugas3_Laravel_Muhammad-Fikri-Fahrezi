<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json([
            "sucess" => true,
            "massage" => "Get all resources",
            "data" => $books
        ], 200);
    }
    
}
