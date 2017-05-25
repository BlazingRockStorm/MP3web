@extends('layouts.app')

@section('content')
<div class="container">
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
    <a href="{{asset('music/create')}}" class="btn btn-primary form-control" style="margin-top: 30px">Add new song</a>
</div>
@endsection