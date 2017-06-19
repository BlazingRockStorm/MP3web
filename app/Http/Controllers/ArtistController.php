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
    
    public function show($id)
    {
        $artist= Artist::find($id);
//        $musics= Music::where('artist', $artist->name)->get();
        $musics = Artist::find($id)->music()->get();
   //     dd($musics);
        return view('artist.show', compact('artist','musics'));
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
        $file=$request->file('pic');
        if ($file) {
            $n  = $file->getClientOriginalName();
            $pic = preg_replace('/(.*)\\.[^\\.]*/', '$1', $n);
            $file->move('pic', $n);
            $artist->create([
                'name'=>$name,
                'info'=>$info,
                'pic'=>$pic
            ]);
        } else {
            $artist->create([
                'name'=>$name,
                'info'=>$info
            ]);
        }
        
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
    public function update($id,Request $request)
    {
        $artist = Artist::find($id);
        $name=$request->input('name');
        $info=$request->input('info');
        $file=$request->file('pic');
        if ($file) {
            $n  = $file->getClientOriginalName();
            $pic = preg_replace('/(.*)\\.[^\\.]*/', '$1', $n);
            $file->move('pic', $n);
            $artist->update([
                'name'=>$name,
                'info'=>$info,
                'pic'=>$pic
            ]);
        } else {
            $artist->update([
                'name'=>$name,
                'info'=>$info
            ]);
        }
        return redirect('artist/'.$id);
    }
    public function destroy($id)
    {
        Artist::find($id)->delete();
        return redirect('artist');
    }
}
