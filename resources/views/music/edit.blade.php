@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit song</h1>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-6">
            <form action="{{ route('music.update',$music->id) }}" method="PUT">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="track">Song's Name:</label>
                    <input type="text" name="track"  class="form-control" id="track" placeholder="Enter song" value="{{ $music->track }}">
                </div>

                <div class="form-group">
                    <label for="artist">Artist's Name:</label>
                    <input type="text" name="artist"  class="form-control" id="artist" placeholder="Enter artist" value="{{$music->artist }}">
                </div>

                <div class="form-group">
                    <label for="album">Album:</label>
                    <input type="album" name="album"  class="form-control" id="album" placeholder="Enter album" value="{{$music->album }}">
                </div>

                <div class="form-group">
                    <label for="genre">Genre:</label>
                    <input type="text" name="genre"  class="form-control" id="genre" placeholder="Enter genre"  value="{{$music->genre }}">
                </div>

                <div class="form-group">
                    <label for="link">Link:</label>
                    <input type="text" name="link"  class="form-control" id="link" placeholder="Enter link" value="{{$music->link }}">
                </div>

                <!--div class="form-group">
                    <label for="cover_art">Cover Art:</label>
                    <input type="file" name="img">
                </div-->

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
    <a class="btn btn-primary" href="{{asset('music/show/'.$music->id)}}">Go Back</a>
</div>
@endsection