<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
         <meta name="description" content="is a multi-purpose service company that provides you with services such as Professional Cleaning Services, Pest Control and Fumigation Services, Electrical Installation, IT Solutions and Maintenance services, Mechanical Installation and Maintenance services, Laundry and Dry-Cleaning Services">
        <meta name="keywords" content="Pestcontrol, Fumigation, Janitor, Cleaning, Laundry,Maintenance,Service,Mechanical,Electrical">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Omaat-Kneel Facility Services</title>
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
        <link rel="stylesheet" href="{{asset("css/custom.css")}}">
        <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/Images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/Images/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light bg-white ">
            <div class="container">
                <a class="navbar-brand" href="{{route('index')}}">
                    <img src="{{asset('Images/logo2.png')}}" style="width:80px; height:40px;" class="img-fluid" alt="">
                </a>
           
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                
                 <ul class="navbar-nav ml-auto mt-2 mt-lg-0" id="link">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">ABOUT US</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          SERVICES
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('service.cleaning')}}">Professional Cleaning Services</a>
                        <a class="dropdown-item" href="{{route('service.pestControl')}}">Pest Control and Fumigation Services</a>
                        <a class="dropdown-item" href="{{route('service.electrical')}}">Electrical Installation and IT Solutions</a>
                        <a class="dropdown-item" href="{{route('service.facility')}}">Facility Solutions and Maintenance Services</a>
                        <a class="dropdown-item" href="{{route('service.laundry')}}">Laundry and Cleaning Services</a>
                        <a class="dropdown-item" href="{{route('service.training')}}">Training Services</a>
                        </div>
                      </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('product')}}">PRODUCT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('portfolio')}}">PROJECTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('blog')}}">NEWS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          QHSE POLICY
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{route('qms')}}">QMS Policy</a>
                        <a class="dropdown-item" href="{{route('hse')}}">HSE Policy</a>
                       
                        </div>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">CONTACT US</a>
                    </li>
                    
                </ul>
            </div>
        </div>
        </nav>

        @yield("content")

        <div id="footer" style="background: black">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <h1>
                            <img src="{{asset('Images/logo3.png')}}" style="width:350px; height:150px;" class="img-fluid" alt="">
                        </h1>
                        <p style="color:white; margin-top:-30px;" class="ml-md-5 ml-md-2 ">
                            Professional green house cleaning and eco-maid service
                        </p>
                    </div>
                     <div class="col-md-3 offset-md-1 py-5 " id="quick_links">
                        <h6 style="color:#26D376;">
                            QUICK LINKS
                        </h6>
                        <p style="color:white;">
                        <a href="{{route('index')}}">Home</a>
                        </p>

                        <p style="color:white;">
                        <a href="{{route('about')}}">About</a>
                        </p>

                        <p style="color:white;">
                            <a href="{{route('product')}}">Products</a>
                        </p>

                        <p style="color:white;">
                            <a href="{{route('blog')}}">Blog</a>
                        </p>

                        <p style="color:white;">
                            <a href="{{route('portfolio')}}">Projects</a>
                        </p>

                        <p style="color:white;">
                            <a href="{{route('contact')}}">Contact</a>
                        </p>
                    </div>
                    <div class="col-md-5   py-md-5">
                        <h6 style="color:#26D376">
                            CONTACT US
                        </h6>
                        <p class="text-white">
                            1 ADEKUNLE OWOBIYI CLOSE, OFF OLADELE KADIRI STR. OGBA, LAGOS
                        </p>
                        <p class="text-white">
                            +234-80-65649477 <br>
                            +234-80-23198004
                        </p>
                        <p class="text-white">
                            enquiries@omaatkneel.com, omaatclean@gmail.com
                        </p>

                        <p>
                            <a href="https://www.facebook.com/OMAAT-Kneel-and-Facility-Services-Ltd-865125710534710/" style="text-decoration:none; color:#26D376;"><i class="fab fa-facebook  " style="color:#26D376; font-size:20px;"></i></a>
                            
                            <a href="https://instagram.com/omaatkneel" style="text-decoration:none; color:#26D376;"><i class="fab fa-instagram    "style="color:#26D376; font-size:20px;"></i></a>
                            
                            <a href="https://wa.me/08023198004" style="text-decoration:none; color:#26D376;"><i class="fab fa-whatsapp    "style="color:#26D376; font-size:20px;"></i></a>
                            
                            <a href="https://www.linkedin.com/company/omaat-kneel-and-facility-services-ltd" style="text-decoration:none; color:#26D376;"><i class="fab fa-linkedin" aria-hidden="true"style="color:#26D376; font-size:20px;"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        
    <script src="{{asset("js/jquery-3.2.1.min.js")}}"></script>
    <script src="{{asset("js/tinymce/jquery.tinymce.min.js")}}"></script>
    @yield('jquery')
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="{{asset("js/app.js")}}"></script>
    <script src="{{asset("js/all.min.js")}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="{{asset("js/tinymce/tinymce.min.js")}}"></script>
    
    @yield("js")
    </body>
</html>
