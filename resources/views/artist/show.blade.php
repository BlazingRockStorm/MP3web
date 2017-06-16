@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Artist</h1>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-6"><img src="{{asset('pic/'.$artist->pic.'.jpg')}}" height=380"></div>
        <div class="col-md-6">
            <h1>{{ $artist->name }}</h1>
            <h3>{{ $artist->info }}</h3>
        </div>
    </div>
    @foreach ($music as $m)
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
@endsection