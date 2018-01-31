@extends('welcome')
@section('content')
    <div class="col-sm-9" style="margin-top: 60px;">
        <h3>{{$post->title}}</h3>
        <div class="col-sm-5" style="width: 550px;">
            <img src="<?php echo asset("images/images/".$post->id.".jpeg")?>" alt="Product image cap"
             class="img-thumbnail rounded mx-auto d-block" style="display:block; width: 550px;left: 0; right: 0;" >
        </div>
        <p style="color: black; margin-top: 30px; font-size: 20px;">{{$post->description}}</p>
    </div>

     <hr>

     <?php dd($comment); ?>


     <div class="box">
           <form method="post" action="/comment/{{$post->id}}">
                 {{csrf_field()}}
               <textarea name="comment"></textarea>
               <input type="submit" name="submit" value="add comment" class="btn btn-primary">
           </form>
     </div>
     <hr>


       <a href="/edit/{{$post->id}}"><button class="btn btn-primary">Edit</button></a>
       <a href="/delete/{{$post->id}}"><button class="btn btn-danger">Delete</button></a>

@endsection
