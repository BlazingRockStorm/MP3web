<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MusicRequest;
use App\Music;
use App\Artist;
use App\Genre;
use Request;

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
        $music= new Music();
        $track=$request->input('track');
        $artist=$request->input('artist');
        $album=$request->input('album');
        $genre=$request->input('genre');
        $link=$request->input('link');
        //dd($artist_id);
        //get genre_id
        $genre_data = Genre::where('genre','=',$genre)->first();
        if ($genre_data != null) {
            $genre_id = $genre_data->id;
        } else {
            $genre_new = Genre::create([
                'genre'=>$genre
            ]);
            $genre_id = $genre_new->id;
        }
        //get artist_id
        $artist_data = Artist::where('name','=',$artist)->first();
        if ($artist_data != null) {
            $artist_id = $artist_data->id;
        } else {
//            return view('artist.create');
            $artist_new=Artist::create([
                'name'=>$artist,
                'genre_id'=> $genre_id
                ]);
            $artist_id = $artist_new->find($artist_new->id)->id;
        }
        //dd($genre_id);
        $file=$request->file('img');        
        if ($file) {
            $name  = $file->getClientOriginalName();
            $cover = preg_replace('/(.*)\\.[^\\.]*/', '$1', $name);
            $file->move('img', $name);
        //$music= $request->all();
            $music->create([
                'track'=>$track,
                'artist'=>$artist,
                'album'=>$album,
                'genre'=>$genre,
                'link'=>$link,
                'cover_art'=>$cover,
                'artist_id'=>$artist_id,
                'genre_id'=>$genre_id
            ]);
        } else {
            $music->create([
                'track'=>$track,
                'artist'=>$artist,
                'album'=>$album,
                'genre'=>$genre,
                'link'=>$link,
                'artist_id'=>$artist_id,
                'genre_id'=>$genre_id
            ]);
        }
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
        if ($file) {
            $name  = $file->getClientOriginalName();
            $cover = preg_replace('/(.*)\\.[^\\.]*/', '$1', $name);
            $file->move('img', $name);
        //$music= $request->all();
            $music->update([
                'cover_art'=>$cover
            ]);
        }
        $music->update([
            'track'=>$track,
            'artist'=>$artist,
            'album'=>$album,
            'genre'=>$genre,
            'link'=>$link
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
    
    
    public function __construct(Request $request) {
        $this->request = $request;
    }
    
    
}
