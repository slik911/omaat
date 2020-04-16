@extends('layouts.master')
@section('content')
    <div class="header">
        <div class="container">
            <div class="col-md-12">
                <h5 class="text-white text-center" style="padding-top:70px;">
                    CONTACT US
                </h5>
            <p class="text-center text-white"><a href="{{route('index')}}" style="text-decoration:none; color:#26D376">Home</a> >> Contact</p>
            </div>
        </div>
    </div>
    <div id="map" class="mt-md-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-none d-sm-none d-md-block">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.1299091911724!2d3.3414013147712796!3d6.630782995205191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93de04243f0b%3A0x9b73f6c2cab4096e!2s1%20Adekunle%20Owobiyi%20Cl%2C%20Ogba%2C%20Ikeja!5e0!3m2!1sen!2sng!4v1585682645532!5m2!1sen!2sng" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-8 mt-md-4 mt-4">
                    <h3>Get in Touch</h3>
                    <p>Drop us a message and we'll get back to you.</p>
                <form action="{{route('contact.me')}}" method="post">
                    @csrf
                                              <div class="form-group">
                          <label for="" style="font-size:14px">Full Name</label>
                          <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" style="border-radius:0px;" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" style="font-size:14px">Email</label>
                                    <input type="text" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" style="border-radius:0px;" required>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" style="font-size:14px">Subject</label>
                                    <input type="text" name="subject" id="" class="form-control" placeholder="" aria-describedby="helpId" style="border-radius:0px;" required>
                                  </div>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for=""  style="font-size:14px">Message</label>
                          <textarea class="form-control" name="message" id="" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn shadow" style="color:white; background-color:#26D376; border-radius:0px">Submit</button>
                    </form>
                </div>
                <div class="col-md-4 " id="contact_text">
                    <div class="row">
                        <div class="col-2">
                        <img src="{{asset('Images/address.png')}}" style="width:40px; height:40px;" alt="">
                        </div>
                        <div class="col-9">
                            <h6 style="color:#26D376">Address
                            </h6>
                            <p  style="font-size:13px; ">1 ADEKUNLE OWOBIYI CLOSE, OFF OLADELE KADIRI STR. OGBA, LAGOS</p>
                        </div>
                    </div>
              
                    <div class="row">
                        <div class="col-2">
                        <img src="{{asset('Images/phone.png')}}" style="width:40px; height:40px;" alt="">
                        </div>
                        <div class="col-9">
                            <h6 style="color:#26D376">Phone Numbers
                            </h6>
                            <p  style="font-size:13px; ">
                                +234-80-65649477 <br>
                                +234-80-23198004
                            </p>
                        </div>
                    </div>
              
                    <div class="row">
                        <div class="col-2">
                        <img src="{{asset('Images/mail.png')}}" style="width:40px; height:40px;" alt="">
                        </div>
                        <div class="col-9">
                            <h6 style="color:#26D376">Email
                            </h6>
                            <p  style="font-size:13px; ">
                                <a href="mailto:enquiries@omaatkneel.com"  style="color:black; text-decoration:none;">enquiries@omaatkneel.com </a> 
                                <br> <a  href="mailto:omaatclean@gmail.com" style="text-decoration:none; color:black;">omaatclean@gmail.com</a>
                            </p>
                        </div>
                    </div>
              
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
<script>
    $(document).ready(function() {
        
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
@endsection