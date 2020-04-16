@extends('layouts.master')
@section('content')
    <div class="header">
        <div class="container">
            <div class="col-md-12">
                <h5 class="text-white text-center" style="padding-top:70px;">
                    ABOUT US
                </h5>
            <p class="text-center text-white"><a href="{{route('index')}}" style="text-decoration:none; color:#26D376">Home</a> >> About us</p>
            </div>
        </div>
    </div>

    <div id="about_content" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 style="color:#26D376; " class="mt-4 text-center">
                        OMAAT-Kneel and Facility services Ltd
                        <hr style=" width:60px;">
                    </h4>
                    <p class="text-center">Think big, think best service</p>
                </div>
                <div class="col-md-7 mt-4">
                    <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/">
                    <div id="slider">
                        <figure>
                        <img src="{{asset('Images/electrical5.png')}}"  class="img-fluid " alt="" style=" object-fit:cover;  height:350px;"a lt>
                        <img src="{{asset('Images/cleaning6.png')}}"   class="img-fluid " alt="" style=" object-fit:cover; height:350px;" alt>
                        <img src="{{asset('Images/pest control.jpg')}}"   class="img-fluid " alt="" style=" object-fit:cover; height:350px;" alt>
                        <img src="{{asset('Images/laundry3.png')}}"   class="img-fluid " alt="" style=" object-fit:cover; height:350px;" alt>
                        <img src="{{asset('Images/IT.png')}}"   class="img-fluid " alt="" style=" object-fit:cover; height:350px;" alt>
                        </figure>
                        </div>
                </div>
                <div class="col-md-5 py-5" style="background:#26D376">
                    <p style="text-align:justify; line-height:30px; color:white">
                        OMAAT-Kneel and Facility services Ltd was established to provide essential and reliable facilities service solutions. Our primary focus is to provide Professional Cleaning Services, Pest Control and Fumigation Services, Electrical Installation, IT Solutions and Maintenance services, Mechanical Installation and Maintenance services, Laundry and Dry-Cleaning Services. We service both commercial and residential buildings, financial institutions, military, federal and city government, small businesses, major hotel chains, and large corporations
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="mission" class="mt-md-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-2">
                        <img src="{{asset('Images/mission1.png')}}" style="width:40px; height:40px;" alt="">
                        </div>
                        <div class="col-9 shadow pt-4 pr-4 pl-4 " style="background:#26D376">
                            <h6 class="text-white">MISSION
                            </h6>
                            <p class="text-white" style="font-size:13px;">Aim to be a national market leader in the provision of facility solutions, in delivering reliable, quality and cost effective services to our customers</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 " id="vision">
                    <div class="row">
                        <div class="col-2">
                            <img src="{{asset('Images/vision1.png')}}" style="width:40px; height:40px;" alt="">
                            </div>
                            <div class="col-9 shadow pt-4 pr-4 pl-4 " style="background:#26D376">
                                <h6 class="text-white">VISION
                                </h6>
                                <p class="text-white" style="font-size:13px;">To be the leading facility maintenance service provider of choice in our chosen operating areas for clients, our supply chain and employees
                                </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="client" style="background:#f6f6f6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-4">
                    <h4 class="text-center">CLIENTS</h4>
                    <p class="text-center ">Below are some of our reputable clients</p>
                </div>
                <div class="col-md-12 pt-1 pb-5">
                    <section class="customer-logos slider">
                    <div class="slide"><img src="{{asset('Images/agro.jpg')}}"></div>
                        <div class="slide"><img src="{{asset('Images/bene.jpg')}}"></div>
                        <div class="slide"><img src="{{asset('Images/britannia.png')}}"></div>
                        <div class="slide"><img src="{{asset('Images/dangote.png')}}"></div>
                        <div class="slide"><img src="{{asset('Images/energy360.png')}}"></div>
                        <div class="slide"><img src="{{asset('Images/falck.png')}}"></div>
                        <div class="slide"><img src="{{asset('Images/hotr.png')}}"></div>
                        <div class="slide"><img src="{{asset('Images/jmr.png')}}"></div>
                        <div class="slide"><img src="{{asset('Images/matrix.png')}}"></div>
                        <div class="slide"><img src="{{asset('Images/midax global.png')}}"></div>
                        <div class="slide"><img src="{{asset('Images/rcg.jpg')}}"></div>
                     </section>

                </div>
            </div>
        </div>
    </div>

    <div id="process" class="mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                <img src="{{asset('Images/single-pic.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-md-5 mt-md-5 ">
                    <h1 style="color:#26D376" id="process_text" class="text-auto">Our Working process</h1>
                    <div class="row">
                        <div class="col-2">
                            <div class="circular_icon mx-auto shadow mt-3 p-2">
                                <img src="{{asset('images/calendar.png')}}" id="icon_process" class="img-fluid" alt="">
                                </div>
                        </div>
                        <div class="col-9 mx-auto">
                            <h5 style="line-height:80px" id="icon_text">Book Online</h5>
                        </div>
                        <div class="col-2">
                            <div class="circular_icon mx-auto shadow mt-3 p-2">
                                <img src="{{asset('images/email.png')}}" id="icon_process" class="img-fluid" alt="">
                                </div>
                        </div>
                        <div class="col-9 mx-auto">
                            <h5 style="line-height:80px" id="icon_text">Get Confirmation</h5>
                        </div>
                        <div class="col-2">
                            <div class="circular_icon mx-auto shadow mt-3 p-2">
                                <img src="{{asset('images/emoji.png')}}" id="icon_process" class="img-fluid" alt="">
                                </div>
                        </div>
                        <div class="col-9 mx-auto">
                            <h5 style="line-height:80px" id="icon_text">Lets Enjoy</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});

    </script>
@endsection

