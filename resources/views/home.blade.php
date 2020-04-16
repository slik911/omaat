@extends('layouts.app')

@section('content')
<div id="main">
    <div class="container">
        <div class="row py-md-5">
            <div class="col-md-4 mt-5">
            <a href="{{route('admin.blog')}}"  style="text-decoration:none">
                    <div class="card bg-success p-5 shadow" style="border:0px; border-radius:0px;">
                       <center>
                        <i class="fas fa-newspaper    fa-4x text-white"></i>
                       </center>
                    <h2 class="text-center text-white mt-5">{{number_format($blog)}}</h2>
                    <h5 class="text-center text-white">Published Posts</h5>
                    </div>
                </a>
            </div>


            <div class="col-md-4 mt-5">
                <a href="{{route('admin.product')}}"  style="text-decoration:none">
                        <div class="card bg-danger p-5 shadow" style="border:0px; border-radius:0px;">
                           <center>
                               
                            <i class="fas fa-th    fa-4x text-white"></i>
                           </center>
                        <h2 class="text-center text-white mt-5">{{number_format($product)}}</h2>
                        <h5 class="text-center text-white">Available Products</h5>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-5">
                    <a href="{{route('admin.project')}}" style="text-decoration:none">
                            <div class="card bg-warning p-5 shadow" style="border:0px; border-radius:0px;">
                               <center>
                                   
                                <i class="fas fa-project-diagram    fa-4x text-white"></i>
                               </center>
                            <h2 class="text-center text-white mt-5">{{number_format($project)}}</h2>
                            <h5 class="text-center text-white">Uploaded Projects </h5>
                            </div>
                        </a>
                    </div>
        </div>
    </div>
</div>
@endsection
