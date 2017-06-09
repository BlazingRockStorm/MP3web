@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Current song</h1>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-6"><img src="{{asset('pic/'.$artist->pic.'.jpg')}}" height=380"></div>
        <div class="col-md-6">
            <h1>{{ $artist->name }}</h1>
            <h3>{{ $artist->info }}</h3>
        </div>
    </div>
</div>
@endsection