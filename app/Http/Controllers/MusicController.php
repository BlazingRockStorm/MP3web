<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MusicRequest;
use App\Music;

class MusicController extends Controller
{
    //
    public function index()
    {
        $music= Music::all();
        return view('music.home', compact('music'));
    }
    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show($id)
    {
        $music= Music::find($id);
        return view('music.show', compact('music'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
     */

    public function create()
    {
        return view('music.create');
    }
    /* Store a newly created resource in storage.
    *
    * @return Response
    */
    public function store(MusicRequest $request)
    {
        $track=$request->input('track');
        $artist=$request->input('artist');
        $album=$request->input('album');
        $genre=$request->input('genre');
        $link=$request->input('link');
        $file=$request->file('img');
        $name=$file->getClientOriginalName();
        $cover= preg_replace('/(.*)\\.[^\\.]*/', '$1', $name);
        $file->move('img', $name);
        //$music= $request->all();
        Music::create([
            'track'=>$track,
            'artist'=>$artist,
            'album'=>$album,
            'genre'=>$genre,
            'link'=>$link,
            'cover_art'=>$cover
        ]);
        return redirect('music/home');
    }
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function edit($id)
    {
        $music= Music::find($id);
        return view('music.edit',compact('music'));
    }
    /* Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function update($id,MusicRequest $request)
    {
        $music=Music::find($id);
        $track=$request->input('track');
        $artist=$request->input('artist');
        $album=$request->input('album');
        $genre=$request->input('genre');
        $link=$request->input('link');
        $file=$request->file('img');
        $name=$file->getClientOriginalName();
        $cover= preg_replace('/(.*)\\.[^\\.]*/', '$1', $name);
        $file->move('img', $name);
        //$music= $request->all();
        $music->update([
            'track'=>$track,
            'artist'=>$artist,
            'album'=>$album,
            'genre'=>$genre,
            'link'=>$link,
            'cover_art'=>$cover
        ]);
        return redirect('music/show/'.$id);
    }
    /* Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
        Music::find($id)->delete();
        return redirect('music/home');
    }
    
    
    /*public function __construct(Request $request) {
        $this->request = $request;
    }*/
    
    
}
