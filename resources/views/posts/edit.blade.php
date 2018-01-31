@extends('welcome')
@section('content')
    <div class="container" style="width:750px">
        <form method="post" action="/edit" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="text" name="id" value="{{$post->id}}" hidden>

            <div class="form-group">
                <label>Title:</label>
                <input type="text" name="title" class="form-control" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label>Description:</label>
                <textarea name="description" class="form-control" rows="15">{{$post->description}}</textarea>
            </div>
            <div class="form-group">
                <label>Image:</label>
                <input type="file" class="form-control" name="image" value="{{$post->image}}">
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
@endsection
