@extends('layouts.master')
@section('content')
<div class="header">
    <div class="container">
        <div class="col-md-12">
            <h5 class="text-white text-center" style="padding-top:70px;">
                NEWS
            </h5>
        <p class="text-center text-white"><a href="{{route('index')}}" style="text-decoration:none; color:#26D376">Home</a> >> News</p>
        </div>
    </div>
</div>

<div id="blog_content">
    <div class="container">
        <div class="col-md-12 mt-5 mb-5">
            @foreach ($blogs as $blog)
            <div class="row mt-3">
                <div class="col-md-4 ">
                    @if ($blog->image)
                    <div class="image-box">
                        <img src="{{asset('Images/blog_image/'.$blog->image)}}" class="img-fluid" style="width:100%; height:250px; object-fit:cover" alt="">
                    </div>
                    @else
                    <video src="{{asset('Images/blog_video/'.$blog->video)}}" style="width:100%; height:250px; object-fit:cover; object-position:center" height="250px"></video>
                    @endif
                
                </div>
                <div class="col-md-8">
                <h5 style="text-transform:uppercase; color:#26D376;" class="pt-md-5  pt-2">{{$blog->title}}</h5>
                    <p style="font-size:13px;">{!!substr($blog->content, 0, 240)!!}...</p>
                    <small style="color:#333">27, May 2020.</small>
                    <p><a href="{{route('blog.single', ['id'=>$blog->id])}}" class="btn btn-sm read mt-1 shadow">Read More</a></p>
                </div>
            </div>
            @endforeach

            
        </div>
    </div>
</div>

@endsection