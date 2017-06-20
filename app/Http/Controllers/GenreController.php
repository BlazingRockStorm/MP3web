<?php

namespace App\Http\Controllers;
use App\Genre;
use Illuminate\Http\Request;

use App\Http\Requests;

class GenreController extends Controller
{
    public function show($id)
    {
        $genre = Genre::find($id);
        $artist = Genre::find($id)->artist()->get();
        return view('genre.show', compact('genre','artist'));
    }
}
