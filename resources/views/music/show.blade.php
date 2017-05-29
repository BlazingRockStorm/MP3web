@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Current song</h1>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-3"><img src="{{asset('img/'.$music->cover_art.'.jpg')}}" height="200"></div>
        <div class="col-md-6">

            <h1>{{ $music->track }}</h1>
            <h3>{{ $music->artist }}</h3>
            <p>{{ $music->album }}</p>
            <p>{{ $music->genre }}</p>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="560" height="315" src="{{$music->link}}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <a class="btn btn-primary" href="{{asset('music/home')}}">Go Back</a>
    <a class="btn btn-primary" href="{{asset('music/edit/'.$music->id)}}">Edit</a>
</div>
@endsection