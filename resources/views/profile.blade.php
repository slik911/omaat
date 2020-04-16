@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="blog">
            <h5>Profile</h5>
        <a href="{{route('home')}}" style="color:#26D376">Home</a> >> Profile
        </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto shadow bg-white p-5">
          <h6 class="text-success">Edit Profile</h6>
          <div class="row">
            
            <div class="col-md-6">
            <form action="{{route('user.update')}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" value="{{Auth::user()->name}}" required> 
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" value="{{Auth::user()->email}}" required> 
                </div>
                <div class="form-group">
                  <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="" aria-describedby="helpId" value="{{Auth::user()->phone}}" required> 
                </div>
                <button type="submit" class="btn btn-success btn-sm">Save Changes</button>
              </form>
            </div>

            <div class="col-md-6 mt-md-0 mt-3">
              <h6 class="text-success">Change Password</h6>


                  <form action="{{route('Profilepassword.update')}}" method="post" id="form">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <label for="pwd">Password</label>
                    <input type="password" name="password" id="pwd" class="form-control" placeholder="" aria-describedby="helpId" value="" required> 
                    </div>
                    <div class="form-group">
                      <label for="cpwd">Confirm Password</label>
                    <input type="password" name="cpwd" id="cpwd" class="form-control" placeholder="" aria-describedby="helpId" value="" required> 
                    </div>
                    <button type="submit" class="btn btn-success btn-sm" id="update">Update Password</button>
                  </form>
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
            $('#update').on('click', function(){
              
                event.preventDefault();
               
                var pwd = $('#pwd').val();
            var cpwd = $('#cpwd').val();
            if(!pwd){
              toastr.error('Enter Password');
            }
      
            if(pwd != cpwd){
                toastr.error('Passwords does not match');
            }
            else{
                $('#form').submit();
            }
            });
        });

    </script>
@endsection