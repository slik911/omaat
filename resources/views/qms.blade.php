@extends('layouts.master')
@section('content')
<div class="header">
    <div class="container">
        <div class="col-md-12">
            <h5 class="text-white text-center" style="padding-top:70px;">
                QUALITY MANAGEMENT SYSTEM POLICY
            </h5>
        <p class="text-center text-white"><a href="{{route('index')}}" style="text-decoration:none; color:#26D376">Home</a> >> Quality Management System policy</p>
        </div>
    </div>
</div>

<div id="statement" style="background-color:#f6f6f6">
    <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto bg-white shadow mt-md-5 mb-md-5 p-md-5 pt-5 pb-5 pl-md-2  pr-md-2 mr-2 ml-2">
              <center><img src="{{asset('Images/logo4.png')}}" style="width:350px; height:150px;" class="img-fluid" alt=""></center>
              <h5 class="text-center">  QUALITY MANAGEMENT SYSTEM POLICY</h5>
           <p style="text-align:justify">
            OMAAT-KNEEL AND FACILITY SERVICES LTD is committed to offering
            products and services that meet their needs to customers that fully satisfy
            customer requirements. We are also committed to complying with the
            requirements of the ISO 9001: 2008 and ensuring the continual improvement
            of effectiveness of the Quality Management System (QMS)
            </p>
      
            <ul>
            <li>Our measurable and enduring Quality objectives are established at the
                corporate as well as the departmental levels. These Quality Objectives
                are reviewed when necessary and in line with changes in our core
                processes.</li>
            <li class="mt-3">OMAAT-KNEEL AND FACILITY SERVICES LTD always strives for
               <b> Zero Defect and No Waste Attitude </b> in everything we do by adopting a
                continuous improvement culture </li>
            <li class="mt-3">All functions across the value chain are fully responsible for observing
                mandatory principles, norms and instructions for maintaining agreed
                quality standards and constantly improving them. <b>Quality everybody’s
                    commitment</b>
                </li>
        </ul>
           
          </div>
        </div>
    </div>
</div>

@endsection