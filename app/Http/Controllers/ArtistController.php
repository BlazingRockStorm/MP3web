<?php

namespace App\Http\Controllers;
use App\Artist;
use App\Music;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArtistController extends Controller
{
    public function index()
    {
        $artist= Artist::all();
        return view('artist.index', compact('artist'));
    }
    
    public function show($id)
    {
        $artist= Artist::find($id);
        $music= Music::where('artist', $artist->name)->get();
        return view('artist.show', compact('artist','music'));
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
    public function edit($id)
    {
        $artist= Artist::find($id);
        return view('artist.edit',compact('artist'));
    }
    /* Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function update($id,MusicRequest $request)
    {
        $artist = Artist::find($id);
        $name=$request->input('name');
        $info=$request->input('info');
        $artist->update([
            'name'=>$name,
            'info'=>$info
        ]);
        return redirect('artist/'.$id);
    }
    public function destroy($id)
    {
        Artist::find($id)->delete();
        return redirect('artist');
    }
}
