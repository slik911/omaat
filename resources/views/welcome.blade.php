@extends('layouts.master')
@section('content')
<div id="header">
    <div class="container-fluid" id="header_img">
        <div id="overlay" class="ml-md-4">
            <h1 id="t1">High Quality</h1><br>
            <p id="t2"> & Affordable Services</p><br>
            <p id="t3">at your door step.</p>
        <a href="{{route('contact')}}" class="btn header_btn mt-1 shadow">Request For Quote</a>
        </div>
    </div>
</div>

<div id="subheader" class="mt-md-5 mt-sm-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 quality_container">
                <div class="row pt-3">
                    <div class="col-md-3  ">
                        <div class="circular_icon mx-auto shadow">
                        <img src="{{asset('Images/services.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-9 quality_services">
                        <h5>Quality Services</h5>
                        <p style="text-align:justify">In OMAAT Kneel and Facility Services Ltd, we have learnt that to offer real quality service we must add value which cannot be bought or measured with money, and that is our sincerity and integrity.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 quality_container">
                <div class="row pt-3">
                    <div class="col-md-3 ">
                        <div class="circular_icon mx-auto shadow">
                        <img src="{{asset('Images/customer.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-9 quality_services">
                        <h5>24hrs Customer Services</h5>
                        <p style="text-align:justify">With our 24hrs customer support services, we are always to help. If you have any questions or concerns about our products or services, feel free to contact our customer support team via e-mail or any of our various social media platforms</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 quality_container">
                <div class="row pt-3">
                    <div class="col-md-3">
                        <div class="circular_icon mx-auto shadow">
                        <img src="{{asset('Images/price.png')}}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-9 quality_services">
                        <h5>Affordable Prices</h5>
                        <p style="text-align:justify">We have the Solution to meet your Needs and a price that meets your Budget!!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="about_top">

</div>
<div id="about_body" class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7  d-none d-sm-none d-md-block">
                <div class="row">
                    <div class="col-md-6 col-12 ">
                    <div class="card img-reduce " style="border-radius:0px;">
                        <img src="{{asset('Images/electrical.jpg')}}" class="img-fluid " alt="" style="height:500px; object-fit:cover; ">
                   
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <img src="{{asset('Images/cleaning5.png')}}" class="img-fluid" alt="" style="height:240px; object-fit:cover">
                            </div>
                            <div class="col-12" style="margin-top:20px;">
                                <img src="{{asset('Images/pest control.jpg')}}" class="img-fluid" alt="" style="height:240px; object-fit:cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-7  d-block d-sm-block d-md-none">
                <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/">
            <div id="slider">
                <figure>
                <img src="{{asset('Images/electrical.jpg')}}"  class="img-fluid " alt="" style=" object-fit:cover;  height:350px;"a lt>
                <img src="{{asset('Images/cleaning5.png')}}"   class="img-fluid " alt="" style=" object-fit:cover; height:350px;" alt>
                <img src="{{asset('Images/pest control.jpg')}}"   class="img-fluid " alt="" style=" object-fit:cover; height:350px;" alt>
                <img src="{{asset('Images/laundry3.png')}}"   class="img-fluid " alt="" style=" object-fit:cover; height:350px;" alt>
                <img src="{{asset('Images/IT.png')}}"   class="img-fluid " alt="" style=" object-fit:cover; height:350px;" alt>
                </figure>
                </div>
            </div>
            <div class="col-md-4" id="about_text">
                <h1 class="mt-md-5">WHAT DO WE DO ?</h1>
                <p style="text-align:justify" class="text-white">Omaat Kneel and Facilty Service Ltd is a multi-purpose service
                    company that provides you with services such as
                    Professional Cleaning Services, Pest Control
                    and Fumigation Services, Electrical Installation, IT Solutions and
                    Maintenance services, Mechanical Installation and Maintenance
                    services, Laundry and Dry-Cleaning Services.</p>
                <a href="{{route('about')}}" class="btn header_btn mt-1 shadow">Learn More</a>
            </div>
        </div>

      
    </div>
</div>
<div id="about_bottom">
<img src="{{asset('Images/curveDown.jpg')}}" style="object-fit:cover; width:100%" class="img-fluid" alt="">
</div>

<div id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 style="color:#26D376" class="text-center mt-4">Services</h4>
                <p class="text-center">Here are some of the services we offer</p>
            </div>
            <div class="col-md-4 col-6">
                <div class="card " style="border:none; border-radius:0px;">
                <div class="image-box">
                    <img class="card-img-top" src="{{asset('Images/cleaning1.png')}}" alt="" style="border-radius:0px;">
                </div>
                    <div class="card-body">
                    <h6 class="card-title text-center"><a href="{{route('service.cleaning')}}" style="text-decoration:none; color:#000; text-transform:uppercase" class="service_link">Professional Cleaning Services</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="card" style="border:none; border-radius:0px;">
                <div class="image-box">
                    <img class="card-img-top" src="{{asset('Images/pest control.jpg')}}" alt="" style="border:none; border-radius:0px;">
                </div>
                    <div class="card-body">
                        <h6 class="card-title text-center"><a href="{{route('service.pestControl')}}" style="text-decoration:none; color:#000; text-transform:uppercase" class="service_link">Pest Control and Fumigation Services</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="card" style="border:none; border-radius:0px;">
                <div class="image-box">
                    <img class="card-img-top" src="{{asset('Images/electrical3.jpg')}}" alt="">
                </div>
                    <div class="card-body">
                        <h6 class="card-title text-center"><a href="{{route('service.electrical')}}" style="text-decoration:none; color:#000; text-transform:uppercase" class="service_link">Electrical Installation, IT Solutions and Maintenance Services</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="card" style="border:none; border-radius:0px;">
                <div class="image-box">
                    <img class="card-img-top" src="{{asset('Images/engineer.png')}}" alt="">
                </div>
                    <div class="card-body">
                    <h6 class="card-title text-center"><a href="{{route('service.facility')}}" style="text-decoration:none; color:#000; text-transform:uppercase" class="service_link">Facility Solutions and Maintenance Services</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="card" style="border:none; border-radius:0px;">
                <div class="image-box">
                    <img class="card-img-top" src="{{asset('Images/laundry.png')}}" alt="">
                </div>
                    <div class="card-body">
                        <h6 class="card-title text-center"><a href="{{route('service.laundry')}}" style="text-decoration:none; color:#000; text-transform:uppercase" class="service_link">Laundry and Dry Cleaning Services</a></h6>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="card" style="border:none; border-radius:0px;">
                    <div class="image-box">
                        <img class="card-img-top" src="{{asset('Images/training.png')}}" alt="">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title text-center"><a href="{{route('service.training')}}" style="text-decoration:none; color:#000; text-transform:uppercase" class="service_link">Training Services</a></h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="get_quote" class="mt-5 ">
    <div id="get_quote_overlay" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9" >
                    <h1 class="pt-5" id="gto1">Best Service, Right Time
                       <br> Right People
                    </h1>
                </div>
                <div class="col-md-3" id="gto2_box">
                <a href="{{route('contact')}}" class="btn header_btn mt-1 shadow" id="gto2">Get in touch</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h1 id="portfolio-text" style="border-bottom:2px solid #26D376">
                    Our<br>
                     Projects
                    
                </h1>
                
            </div>
            <div class="col-md-9 py-5">
                <div class="row">
                        @foreach ($projects as $project)
                        <div class="col-md-4  mb-3">
                            <div class="card p-2" style=" border-radius:0px;">
                                <div class="image-box">
                                    <img class="card-img-top" src="{{asset('Images/project/'.$project   )}}" alt="" class="btn" style="width:100%; height:200px; object-fit:contain; border-radius:0px;">
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="blog" style="background-color:#f6f6f6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 style="color:#26D376" class="text-center mt-4">Our Recent Updates</h4>
                <p class="text-center">Here are our latest news update</p>
            </div>

            @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="card" style="border:none; border-radius:0px; background:transparent">
                    @if ($blog->image)
                    <div class="image-box">
                        <img src="{{asset('Images/blog_image/'.$blog->image)}}" class="img-fluid" style="width:100%; height:250px; object-fit:cover" alt="">
                    </div>
                    @else
                    <video src="{{asset('Images/blog_video/'.$blog->video)}}" style="width:100%; height:250px; object-fit:cover; object-position:center" height="250px"></video>
                    @endif
                    <div class="card-body">
                    <a href="{{route('blog.single', ['id'=>$blog->id])}}" class="" style="text-decoration:none; color:black"><h6 class="card-title text-center portfolio_link">{{$blog->title}}</h6></a>
                    <p class="text-center" style="color:#ccc">{{carbon\carbon::parse($blog->date)->format('d, M Y')}}</p>
                    </div>
                </div>
            </div>
            @endforeach
           

        </div>
    </div>
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('.service_box').hover(function(){
                $('.service_box').toggleClass('shadow');
            });
        });
    </script>
@endsection