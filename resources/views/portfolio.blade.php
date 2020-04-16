@extends('layouts.master')
@section('content')
    <div class="header">
        <div class="container">
            <div class="col-md-12">
                <h5 class="text-white text-center" style="padding-top:70px;">
                    PROJECTS
                </h5>
            <p class="text-center text-white"><a href="{{route('index')}}" style="text-decoration:none; color:#26D376">Home</a> >> Projects</p>
            </div>
        </div>
    </div>

    <div id="portfolio_body" class="mt-5 mb-5">
        <div class="container">
            <div class="row">

                @foreach ($projects as $project)
                <div class="col-md-3 col-6 mt-3">
                    <div class="card" style=" border-radius:0px; height:250px;">
                    <div class="image-box">
                        <img class="card-img-top p-2" src="{{asset('Images/project/'.$project->image_header)}}" alt="" style="width:100%; height:150px; object-fit:contain">
                    </div>
                        <div class="card-body">
                        <h6 class="card-title text-center " id="portfolio_link"><a href="{{route('single.portfolio', ['id'=>$project->id])}}" style="text-decoration: none">{{$project->title}}</a></h6>
                        </div>
                    </div>
                </div>   
                @endforeach

               

            </div>
            {{$projects->links()}}
        </div>
    </div>
@endsection


