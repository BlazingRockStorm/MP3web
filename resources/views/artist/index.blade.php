@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($artist as $artists)
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4"><img src="{{asset('pic/'.$artists->pic.'.jpg')}}" height="250"></div>
        <div class="col-md-6">

            <h1>{{ $artists->name }}</h1>
            <h3>{{ $artists->info }}</h3>
            <a href="{{asset('artist/'.$artists->id)}}">Listen</a>
        </div>
    </div>
    @endforeach
    <a href="{{asset('artist/create')}}" class="btn btn-primary form-control" style="margin-top: 30px">Add new artist</a>
</div>
@endsection