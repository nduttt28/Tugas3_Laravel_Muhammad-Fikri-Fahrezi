<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index() {
        $genres = Genre::all(); // ambil data

        return response()->json([
            "sucess" => true,
            "massage" => "Get all resources",
            "data" => $genres
        ], 200);
}
}