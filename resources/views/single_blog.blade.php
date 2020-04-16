@extends('layouts.master')
@section('content')
<div class="header">
    <div class="container">
        <div class="col-md-12">
            <h5 class="text-white text-center" style="padding-top:70px;">
                NEWS
            </h5>
        <p class="text-center text-white"><a href="{{route('index')}}" style="text-decoration:none; color:#26D376">Home</a> >> <a href="{{route('blog')}}" style="text-decoration:none; color:#26D376">News</a> >> {{$blog->title}}</p>
        </div>
    </div>
</div>

<div id="portfolio_body" class="mt-md-5 mt-3 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
            @if ($blog->image)
            <img src="{{asset('Images/blog_image/'.$blog->image)}}" class="img-fluid" style="width:100%; height:350px; object-fit:cover; object-position:center" alt="">
            @else
                

                <video  class="img-fluid" style="width:100%; height:350px; object-fit:cover; object-position:center" controls>
                    <source src="{{asset('Images/blog_video/'.$blog->video)}}"></video>
            @endif
            <h5 style="color:#26D376" class="mt-3">{{$blog->title}}</h5>
            <p style="text-align:justify">{!!$blog->content!!}</p>
           

            
      
           
            </div>
            <div class="col-md-4 offset-md-1 mt-2 mt-md-0 mb-5">

                <h6 style="color:#26D376" class="mb-3">RECENT POSTS</h6>

                @foreach ($rblog as $post)
            <P style="margin-bottom:2px;"><a href="{{route('blog.single', ['id'=>$post->id])}}" style="text-decoration:none; color:#000">{{$post->title}}</a></P>
                <span style="font-size:12px; color:#ccc; padding-top:-10px;">{{Carbon\carbon::parse($post->date)->format('d, M Y')}}</span>
                <hr>
                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection