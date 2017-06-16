@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add new artist</h1>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-6">
            <form action="{{ route('artist.store') }}" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="name">Artist's Name:</label>
                    <input type="text" name="name"  class="form-control" id="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="info">Artist's Info:</label>
                    <input type="text" name="info"  class="form-control" id="info" placeholder="Enter info">
                </div>

                <div class="form-group">
                    <label for="pic">Artist's picture:</label>
                    <input type="file" name="pic">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
    <a class="btn btn-primary" href="{{asset('artist')}}">Go Back</a>
</div>
@endsection
