@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$genre->genre}}</h1>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#artist">Artists</a></li>
        <li><a data-toggle="tab" href="#song">Songs</a></li>
    </ul>
    <div class="tab-content">
        <div id="artist" class="tab-pane fade in active">
            @foreach ($artist as $artists)
            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-4"><img src="{{asset('pic/'.$artists->pic.'.jpg')}}" width="370"></div>
                <div class="col-md-6">

                    <h1>{{ $artists->name }}</h1>
                    <h3>{{ $artists->info }}</h3>
                    <a href="{{asset('artist/'.$artists->id)}}">Listen</a>
                </div>
            </div>
            @endforeach
        </div>
        <div id="song" class="tab-pane fade">
            @foreach ($musics as $m)
            <div class="row" style="margin-bottom: 10px">
                <div class="col-md-3"><img src="{{asset('img/'.$m->cover_art.'.jpg')}}" height="200"></div>
                <div class="col-md-6">

                    <h1>{{ $m->track }}</h1>
                    <h3>{{ $m->artist }}</h3>
                    <p>{{ $m->genre }}</p>
                    <a href="{{asset('music/show/'.$m->id)}}">Listen</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <a class="btn btn-primary" href="{{asset('genre')}}">Go Back</a>
</div>
@endsection