@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-3"><img src="{{asset('img/'.$music->cover_art.'.jpg')}}" height="200"></div>
        <div class="col-md-6">

            <h1>{{ $music->track }}</h1>
            <h3>{{ $music->artist }}</h3>
            <p>{{ $music->album }}</p>
            <p>{{ $music->genre }}</p>
        </div>
    </div>
    <a class="btn bg-primary" href="{{asset('music/home')}}">Go Back</a>
</div>
@endsection