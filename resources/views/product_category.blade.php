@extends('layouts.master')
@section('content')
<div class="header">
    <div class="container">
        <div class="col-md-12">
            <h5 class="text-white text-center" style="padding-top:70px;">
                PRODUCTS
            </h5>
        <p class="text-center text-white"><a href="{{route('index')}}" style="text-decoration:none; color:#26D376">Home</a> >><a href="{{route('product')}}" style="text-decoration:none; color:#26D376"> Product </a> >> {{$category->name}}</p>
        </div>
    </div>
</div>

<div id="product">
    <div class="container">
        <div class="row mt-3 mb-5">
            <div class="col-md-12 ">
                <div class="row mt-3">
                   
                    @foreach ($products as $product)
                    <div class="col-md-3 col-6 mt-3 ">
                        <div class="card shadow-sm" style="border-radius:0px;">
                        <a href="{{asset('Images/product/'.$product->image)}}" class="p-2">
                            <div class="image-box">
                                <img class="card-img-top" src="{{asset('Images/product/'.$product->image)}}"  class="img-fluid" style="height:150px; object-fit:contain" alt="">
                            </div>
                        </a>
                            <div class="card-body">
                            <p class="text-center;" style="color:#26D376; text-transform:uppercase; text-align:center">{{$product->name}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                  



                </div>
            </div>
          
        </div>
    </div>
</div>

@endsection