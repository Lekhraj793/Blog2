@extends('welcome')
@section('content')
    <div class="col-sm-9" style="margin-top: 60px;">
        <h3>{{$post->title}}</h3>
        <div class="col-sm-5" style="width: 550px; margin-left: 250px; margin-top: 30px;">
            <img src="<?php echo asset("images/images/".$post->id.".jpeg")?>" alt="Product image cap"
             class="img-thumbnail rounded mx-auto d-block" style="display:block; left: 0; right: 0;" >
        </div>
        <p style="color: black; margin-top: 30px; font-size: 20px;">{{$post->description}}</p>
    </div>

     <hr>
      <?php dd($post); ?>
      <div>
          @foreach($post->comment as $comment)

          @endforeach
      </div>




     <div class="box" >
           <form method="post" action="/comment/{{$post->id}}">
                 {{csrf_field()}}
               <textarea name="comment" rows="4" style="width: 600px; margin-left: 140px"></textarea>
               <input type="submit" name="submit" value="add comment" class="btn btn-primary">
           </form>
     </div>
     <hr>


       <a href="/edit/{{$post->id}}"><button class="btn btn-primary">Edit</button></a>
       <a href="/delete/{{$post->id}}"><button class="btn btn-danger">Delete</button></a>

@endsection
