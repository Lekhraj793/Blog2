@extends('welcome')
@section('content')
    <div class="container" style="width:750px">
        <form method="post" action="/insert" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label>Title:</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Description:</label>
                <textarea name="description" class="form-control" rows="3">....</textarea>
            </div>
            <div class="form-group">
                <label>Image:</label>
                <input type="file" class="form-control" name="image">
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
@endsection
