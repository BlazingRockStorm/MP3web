<?php

namespace App\Http\Controllers;
use App\Artist;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArtistController extends Controller
{
    public function index()
    {
        $artist= Artist::all();
        return view('artist.index', compact('artist'));
    }

    public function create()
    {
        return view('artist.create');
    }
    public function store(Request $request)
    {
        $artist = new Artist();
        $name=$request->input('name');
        $info=$request->input('info');
        $artist->create([
            'name'=>$name,
            'info'=>$info
        ]);
        return redirect('artist');
    }
}
