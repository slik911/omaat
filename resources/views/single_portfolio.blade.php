@extends('layouts.master')
@section('content')
    <div class="header">
        <div class="container">
            <div class="col-md-12">
                <h5 class="text-white text-center" style="padding-top:70px;">
                    PROJECTS
                </h5>
            <p class="text-center text-white"><a href="{{route('index')}}" style="text-decoration:none; color:#26D376">Home</a> >> <a href="{{route('portfolio')}}"style="text-decoration:none; color:#26D376">Project</a> >> {{$project->title}}</p>
            </div>
        </div>
    </div>

    <div id="portfolio_body" class="mt-md-5 mt-3 mb-5"> 
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                <img src="{{asset('Images/project/'. $project->image_header)}}" class="img-fluid" style="width:100%; height:350px; object-fit:contain; object-position:center" alt="">
                <h5 style="color:#26D376" class="mt-3">{{$project->title}}</h5>
                <p style="text-align:justify">{!!$project->content!!}</p>
               

                
          
                    <p>More Pictures</p>
                    <div class="row">

                            @if ($project->project_images)
                            @foreach (json_decode($project->project_images) as $picture)
                         
                                <div class="col-md-4 col-6 mt-3">
                                    <a href="{{asset('Images/project/'.$picture)}}">
                                    <div class="card" style="border:none; border-radius:0px;">
                                        <img class="card-img-top" src="{{asset('Images/project/'.$picture)}}" style="width:100%; height:200px; object-fit:cover; border-radius:0px"  alt="">
                                        </div>
                                    </a>
                                </div>
                            
                        @endforeach
                            @endif

                        
                        {{-- <div class="col-md-3 col-6 mt-3">
                            <div class="card" style="border:none; border-radius:0px;">
                                <img class="card-img-top" src="{{asset('Images/laundry3.png')}}" style="width:100%; height:100px; object-fit:cover"  alt="">
                                </div>
                        </div>
                        <div class="col-md-3 col-6 mt-3">
                            <div class="card" style="border:none; border-radius:0px;">
                                <img class="card-img-top" src="{{asset('Images/engineer2.png')}}" style="width:100%; height:100px; object-fit:cover"  alt="">
                                </div>
                        </div>
                        <div class="col-md-3 col-6 mt-3">
                            <div class="card" style="border:none; border-radius:0px;">
                                <img class="card-img-top" src="{{asset('Images/pest control2.jpg')}}" style="width:100%; height:100px; object-fit:cover"  alt="">
                                </div>
                        </div> --}}
                    </div>
     
                </div>
                <div class="col-md-4 offset-md-1 mt-5 mt-md-0 mb-5">
                <h6 style="color:#26D376">PROJECT INFORMATION</h6>
                    <table class="table table-bordered ">
                        
                        <tbody>
                            
                            <tr>
                                <th style="color:#26D376; font-weight:500">Location</th>
                            <td>{{$project->address}}</td>
                            </tr>
                            <tr>
                                <th style="color:#26D376; font-weight:500">Client</th>
                                <td>{{$project->client}}</td>
                            </tr>
                            <tr>
                                <th style="color:#26D376; font-weight:500">Start Date</th>
                                <td>{{Carbon\carbon::parse($project->start_date)->format('d, M Y')}}</td>
                            </tr>
                            <tr>
                                <th style="color:#26D376; font-weight:500">End Date</th>
                                <td>{{Carbon\carbon::parse($project->end_date)->format('d, M Y')}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <h6 style="color:#26D376" class="mt-3 py-3">RECENT POSTS</h6>
                    @foreach ($rpj as $post)
                 
                    <P style="margin-bottom:2px;"><a href="{{route('single.portfolio', ['id'=>$post->id])}}" style="text-decoration:none; color:#000">{{$post->title}}</a></P>
                    <span style="font-size:12px; color:#ccc; padding-top:-10px;">{{Carbon\carbon::parse($post->date)->format('d, M Y')}}</span><hr/>
                    
                    @endforeach
                    </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function(){
     
        });
    </script>
@endsection