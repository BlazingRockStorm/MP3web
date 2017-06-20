@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($genre as $genres)
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-6">

            <h1>{{ $genres->genre }}</h1>
            <a href="{{asset('genre/'.$genres->id)}}">Listen</a>
        </div>
    </div>
    @endforeach
</div>
@endsection