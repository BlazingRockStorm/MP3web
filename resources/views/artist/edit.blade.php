@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit artist</h1>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-6">
            <form action="{{ route('artist.update',$artist->id) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="name">Artist's Name:</label>
                    <input type="text" name="name"  class="form-control" id="name" placeholder="Enter name" value="{{$artist->name}}">
                </div>

                <div class="form-group">
                    <label for="info">Artist's Info:</label>
                    <input type="text" name="info"  class="form-control" id="info" placeholder="Enter info" value="{{$artist->info}}">
                </div>

                <div class="form-group">
                    <label for="pic">Artist's picture:</label>
                    <input type="file" name="pic">
                </div>
  
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Edit</button>
                </div>
            </form>
        </div>
    </div>
    <a class="btn btn-primary" href="{{asset('artist/'.$artist->id)}}">Go Back</a>
</div>
@endsection
