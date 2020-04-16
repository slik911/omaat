@extends('layouts.master')
@section('content')
<div class="header">
    <div class="container">
        <div class="col-md-12">
            <h5 class="text-white text-center" style="padding-top:70px;">
                PRODUCTS
            </h5>
        <p class="text-center text-white"><a href="{{route('index')}}" style="text-decoration:none; color:#26D376">Home</a> >> Product</p>
        </div>
    </div>
</div>

<div id="product">
    <div class="container">
        <div class="row mt-3 mb-5">
            <div class="col-md-12 ">
                <div class="row mt-3">
                   
                    @foreach ($categories as $category)
                    <div class="col-md-6 mt-3 mx-auto">
                        <div class="card category" style="border:none; border-radius:0px;">
                        <img class="card-img-top" src="{{asset('Images/categories.png')}}" class="img-fluid" style="height:250px; object-fit:cover; border-radius:0px" alt="">
                        <p class="centered">{{$category->name}}<br> <a href="{{route('product.category', ['id'=>$category->id])}}" class="btn btn-success mt-1 " style="border-radius:0px;">Products</a></p>
                        </div>
                    </div>
                    @endforeach

                  



                </div>
            </div>
          
        </div>
    </div>
</div>

@endsection