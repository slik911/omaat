@extends('layouts.master')
@section('content')
    <div class="header">
        <div class="container">
            <div class="col-md-12">
                <h5 class="text-white text-center" style="padding-top:70px; text-transform:uppercase">
                    Pest Contorl and Fumigation Services
                </h5>
            <p class="text-center text-white"><a href="{{route('index')}}" style="text-decoration:none; color:#26D376">Home</a> >>  Pest Contorl and Fumigation Services </p>
            </div>
        </div>
    </div>

    <div id="service_content" class="mt-5 mb-5">
        <div class="container">
         
            <div class="row mt-5 ">
                
                <div class="col-md-6 pt-5 pb-5  pr-3 pl-3 order"  style="background-color:#26D376;">
                    <h5 style="color:#fff">PEST CONTROL AND FUMIGATION SERVICES</h5>
                    <p>We are equipped to handle all types of pest elimination ranging from:</p>
                    <div class="row list_service mt-4">
                        <div class="col-2 box1"><img src="{{asset('Images/checkmark.png')}}" class="img-fluid list_icon_png" style="width:25px; height:25px" alt=""></div>
                        <div class="col-10 box2">
                            Integrated Pest Management
                        </div>
                        <div class="col-2 box1"><img src="{{asset('Images/checkmark.png')}}" class="img-fluid list_icon_png" style="width:25px; height:25px" alt=""></div>
                        <div class="col-10 box2">
                            Mice & Rodent Control
                        </div>
                        <div class="col-2 box1"><img src="{{asset('Images/checkmark.png')}}" class="img-fluid list_icon_png" style="width:25px; height:25px" alt=""></div>
                        <div class="col-10 box2">
                            Mosquitos 
                        </div>
                        <div class="col-2 box1"><img src="{{asset('Images/checkmark.png')}}" class="img-fluid list_icon_png" style="width:25px; height:25px" alt=""></div>
                        <div class="col-10 box2">
                            Cockroach
                        </div>
                        <div class="col-2 box1"><img src="{{asset('Images/checkmark.png')}}" class="img-fluid list_icon_png" style="width:25px; height:25px" alt=""></div>
                        <div class="col-10 box2">
                            Bed Bugs
                        </div>
                        <div class="col-2 box1"><img src="{{asset('Images/checkmark.png')}}" class="img-fluid list_icon_png" style="width:25px; height:25px" alt=""></div>
                        <div class="col-10 box2">
                            Bird Prevention and Bird Control
                        </div>
                        <div class="col-2 box1"><img src="{{asset('Images/checkmark.png')}}" class="img-fluid list_icon_png" style="width:25px; height:25px" alt=""></div>
                        <div class="col-10 box2">
                            Textile Insects
                        </div>
                        <div class="col-2 box1"><img src="{{asset('Images/checkmark.png')}}" class="img-fluid list_icon_png" style="width:25px; height:25px" alt=""></div>
                        <div class="col-10 box2">
                            Store Product Insects
                        </div>
                        
                    </div>
                </div>

                <div class="col-md-6 mr-auto mt-4">
                    <center>
                        <img src="{{asset('Images/pest control.png')}}" style="height:400px; object-fit:cover" class="img-fluid" alt="">
                    </center>
                    </div>
            </div>




        </div>
    </div>
@endsection

@section('js')
    <script>
$('a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
		var $old_tab = $($(e.target).attr("href"));
		var $new_tab = $($(e.relatedTarget).attr("href"));

		if($new_tab.index() < $old_tab.index()){
			$old_tab.css('position', 'relative').css("right", "0").show();
			$old_tab.animate({"right":"-100%"}, 300, function () {
				$old_tab.css("right", 0).removeAttr("style");
			});
		}
		else {
			$old_tab.css('position', 'relative').css("left", "0").show();
			$old_tab.animate({"left":"-100%"}, 300, function () {
				$old_tab.css("left", 0).removeAttr("style");
			});
		}
	});

	$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
		var $new_tab = $($(e.target).attr("href"));
		var $old_tab = $($(e.relatedTarget).attr("href"));

		if($new_tab.index() > $old_tab.index()){
			$new_tab.css('position', 'relative').css("right", "-2500px");
			$new_tab.animate({"right":"0"}, 500);
		}
		else {
			$new_tab.css('position', 'relative').css("left", "-2500px");
			$new_tab.animate({"left":"0"}, 500);
		}
	});

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		// your code on active tab shown
	});
    </script>
@endsection

