@extends('welcome')
@section('content')

<div class="container-fluid" style="margin-top:70px;">
   <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
     <div class="col-md-6 px-0">
       <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
       <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what's most interesting in this post's contents.</p>
       <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
     </div>
   </div>

          <div class="row" style="float: left; width:1050px;">
              <div class="col-md-12 blog-main" style="margin-left:20px;">
                  <h3 class="pb-3 mb-4 font-italic border-bottom">
                      From the Firehose
                  </h3>
<!-- <?php //dd($posts) ?> -->
                  @foreach ($posts as $post)
                       <div class="blog-post">
                            <a href="/posts/show/{{$post->id}}"><h2 class="blog-post-title">{{$post->title}}</h2></a>
                            <p class="blog-post-meta">{{$post->created_at}}<a href="#">Mark</a></p>
                            <img src="<?php echo asset("/images/images/".$post->id.".jpeg")?>"
                                   alt="Product image cap" class="img-thumbnail rounded mx-auto d-block" style="display:block;
                                            width: 150px; height: 150px" >

                            <p>{{str_limit(strip_tags($post->description), 500)}}
                                    <a href="/posts/show/{{$post->id}}" class="btn">Read More</a>
                            </p>

                       </div><br><!-- /.blog-post -->
                       <a href="/posts/edit/{{$post->id}}" class="btn btn-primary">Edit</a>
                       <a href="/delete/{{$post->id}}" class="btn btn-primary">Delete</a>
                  @endforeach

                   <nav class="blog-pagination">
                     <a class="btn btn-outline-primary" href="#">Older</a>
                     <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                   </nav>
               </div><!-- /.blog-main -->
          </div><!-- /.row -->

      <div class="sidebar" style="float: right; width:400px;">
          @include('include.sidebar')
      </div>
</div>
