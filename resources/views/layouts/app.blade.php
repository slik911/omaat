<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Omaat-Cpanel</title>

    <!-- Scripts -->
    
    <script src=""></script>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    
        <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{asset("css/admin.css")}}">
        <link rel="stylesheet" href="{{asset('css/toastr.min.css')}}">
        <link rel="stylesheet" href="{{ asset('DataTables-1.10.18/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{ asset('DataTables-1.10.18/css/jquery.dataTables.min.css')}}">
        @yield('jquery')
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/Images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/Images/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" style="font-size:13px;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('Images/logo2.png')}}" style="width:60px; height:30px;" class="img-fluid" alt="">
                </a>
                {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="{{route('user.profile')}}" class="dropdown-item" style="font-size:13px;" >Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="font-size:13px;">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-dark pr-md-5 pl-md-5" style="background:#26D376">
        <a class="navbar-brand" href="{{route('index')}}"></a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style=" border:none">
              <span class="navbar-toggler-icon" style="color:#fff;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto ml-md-5">
                <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{route('admin.blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('admin.product')}}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.project')}}">Projects</a>
                  </li>
                <li class="nav-item dropdown d-block d-sm-block d-md-none" style="transition:.6s ease-in-out">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="background-color:transparent; border:none;">
                    <a href="{{route('user.profile')}}" class="dropdown-item text-white" style="margin-left:-22px; margin-top:-10px; font-size:13px;">Profile</a>
                        <a class="dropdown-item text-white" style="margin-left:-22px; margin-top:10px; font-size:13px;" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout_form').submit();" >
                            {{ __('Logout') }}
                        </a>

                        <form id="logout_form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
              </ul>
            </div>
          </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="{{asset("js/jquery-3.2.1.min.js")}}"></script>
    <script src="{{ asset('DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset("js/tinymce/jquery.tinymce.min.js")}}"></script>
    @yield('jquery')
    <script src="{{asset('js/toastr.min.js')}}"></script>
    <script src="{{asset("js/bootstrap.min.js")}}"></script>
    <script src="{{ asset('DataTables-1.10.18/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset("js/all.min.js")}}"></script>
    <script src="{{asset("js/custom.js")}}"></script>
    <script src="{{asset("js/tinymce/tinymce.min.js")}}"></script>
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}

    <script>
        $(document).ready(function() {
            $('#example').DataTable();

           
            
            @if(Session::has('success'))
            toastr.warning("{{ Session::get('success') }}");
            @endif

            @if(Session::has('info'))
            toastr.warning("{{ Session::get('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
            @endif


            @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
            @endif

        });

    </script>
    @yield('js')
</body>
</html>
