@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 mx-auto mt-3">
            <center><img src="{{asset('Images/logo2.png')}}" style="width:80px; height:40px;" class="img-fluid pb-2" alt=""></center>
            <div class="card shadow  pl-3 pr-3 " style="border-radius:0px; border:0px;">
                <h5 style="color:#26D376" class="text-center py-4">LOGIN</h5>
                <hr>
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-group row">
                        <div class="col-md-6 ">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group  mb-5">
                        
                            <button type="submit" class="btn " style="color:#fff; background:#26D376">
                                {{ __('Login') }}
                            </button>
                            <hr>
                            <p class="text-center">
                            <i class="fab fa-facebook  " style="color:#26D376; font-size:20px;"></i>
                            <i class="fab fa-instagram    "style="color:#26D376; font-size:20px;"></i>
                            <i class="fab fa-whatsapp    "style="color:#26D376; font-size:20px;"></i>
                            <i class="fab fa-linkedin" aria-hidden="true"style="color:#26D376; font-size:20px;"></i>
                        </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 
@endsection
