<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
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
    public function store(Request $request)
    {
        //$request->input('link');
        $music= $request->all();
        Music::create($music);
        return redirect('music/home');
    }
    /*public function __construct(Request $request) {
        $this->request = $request;
    }*/
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response

    public function edit($id)
    {
        $book=Book::find($id);
        return view('books.edit',compact('book'));
    }

    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response

    public function update($id,CheckBooksRequest $request)
    {
        $bookUpdate=$request->all();
        $book=Book::find($id);
        $book->update($bookUpdate);
        return redirect('books');
    }
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response

    public function destroy($id)
    {
        Book::find($id)->delete();
        return redirect('books');
    }
     */
}
