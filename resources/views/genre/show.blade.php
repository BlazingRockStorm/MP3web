@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$genre->genre}}</h1>
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
    <a class="btn btn-primary" href="{{asset('genre')}}">Go Back</a>
</div>
@endsection