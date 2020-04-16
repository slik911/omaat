@extends('layouts.app')
@section('content')
<div class="modal fade edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-xl">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="myLargeModalLabel">Edit Project</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row">
          <div class="col-md-4">
            <div class="row">
                <div class="col-12" style=" border:1px solid #ccc; padding:0px;">
                    <img id="eblah" src="#"  class="img-fluid" style="width:100%; height:250px; object-fit:cover; padding:0px;" />
                </div>
            </div>
          </div>
      
          <div class="col-md-8 mt-md-0 mt-3">
          <form action="{{route("project.update")}}" id="form" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="id" class="form-control" placeholder="" aria-describedby="helpId" required>
                <div class="form-group">
                  <input type="text" name="title" id="etitle" class="form-control form-control-sm" placeholder="Job Title" aria-describedby="helpId" required>
                </div>
                <div class="form-group">
                    <input type="text" name="address" id="eaddress" class="form-control form-control-sm" placeholder="Job Location" aria-describedby="helpId" required>
                  </div>
                  <div class="form-group">
                    <input type="text" name="client" id="eclient" class="form-control form-control-sm" placeholder="Client " aria-describedby="helpId" required>
                  </div>

                  <div class="row">
                      <div class="col-6">
                          <div class="form-group">
                              <label for="">Start Date</label>
                              <input type="date" name="start_date" id="estart_date" class="form-control form-control-sm" placeholder="" aria-describedby="helpId" required>
                            </div>
                      </div>
                      <div class="col-6">
                          <div class="form-group">
                              <label for="">End Date</label>
                              <input type="date" name="end_date" id="eend_date" class="form-control form-control-sm" placeholder="" aria-describedby="helpId" required>
                            </div>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="content">Content</label>
                      <textarea name="econtent" class="form-control" id="econtent"   >
                      </textarea>
                    </div>

                   

                     <div class="form-group">
                      <label for="">Upload Image</label>
                      <input type="file" class="form-control-file" name="image" id="eimage" placeholder="" aria-describedby="fileHelpId" >    
                      </div>
                     

                  <button type="submit" class="btn btn-success btn-sm" id="submit">Save Changes</button>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="blog">
            <h5>Project</h5>
        <a href="{{route('home')}}" style="color:#26D376">Home</a> >> Project
        <p class="float-right">
            <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">New Project</a>
        </p>

        <table class="table table-striped table-hover bg-white shadow table-responsive-sm" id="example" style="width:100%;">
            <thead class="thead-inverse">
                <tr>
                    <th>S/No</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Client</th>
                    <th></th>
                    <th></th>
               
                </tr>
                </thead>
                <tbody>
                    @php
                        $n = 1;
                    @endphp
 
                    @foreach ($projects as $project)
                     <tr>
                    <td>{{$n++}}</td>
                    <td>{{Carbon\carbon::parse($project->start_date)->format('d,M Y')}}</td>
                    <td>{{Carbon\carbon::parse($project->end_date)->format('d,M Y')}}</td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->address}}</td>
                    <td>{{$project->client}}</td>

                    <td><a href="#" class="btn btn-success edit btn-sm" data-toggle="modal" data-target=".edit" data-id="{{$project->id}}">Edit</a></td>
                    <td>
                        <a href="{{route('project.delete', ['id'=> $project->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You sure you want to delete this ?')">Delete</a>
                    </td>
                </tr>
                    @endforeach

                </tbody>
        </table>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg " tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
aria-hidden="true">
<div class="modal-dialog   modal-xl">
  <div class="modal-content">
    <div class="modal-header">
      <h6 class="modal-title" id="myLargeModalLabel">New Project</h6>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body" >
      <div class="container">
        <div class="row">
            <div class="col-md-4">
              <div class="row">
                  <div class="col-12" style=" border:1px solid #ccc; padding:0px;">
                      <img id="blah" src="#"  class="img-fluid" style="width:100%; height:250px; object-fit:cover; padding:0px;" />
                  </div>
              </div>
            </div>
            <div class="col-md-8 mt-md-0 mt-3">
            <form action="{{route("project.upload")}}" id="form_project" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <input type="text" name="title" id="title" class="form-control form-control-sm" placeholder="Job Title" aria-describedby="helpId" required>
                  </div>
                  <div class="form-group">
                      <input type="text" name="address" id="address" class="form-control form-control-sm" placeholder="Job Location" aria-describedby="helpId" required>
                    </div>
                    <div class="form-group">
                      <input type="text" name="client" id="client" class="form-control form-control-sm" placeholder="Client " aria-describedby="helpId" required>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" name="start_date" id="start_date" class="form-control form-control-sm" placeholder="" aria-describedby="helpId" required>
                              </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input type="date" name="end_date" id="end_date" class="form-control form-control-sm" placeholder="" aria-describedby="helpId" required>
                              </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" id="content"   >
                        </textarea>
                      </div>

                      

                       <div class="form-group">
                        <label for="">Upload Image</label>
                        <input type="file" class="form-control-file" name="image" id="image" placeholder="" aria-describedby="fileHelpId" required>    
                        </div>
                        <hr>
                        <h6>Upload more Images</h6>
                        <small> Choose Multiple files max 2mb each</small>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="project_image[]" id="image1"  multiple>    
                                    </div>
                            </div>
                            {{-- <div class="col-6">
                                <div class="form-group">
                                    <input type="file" class="form-control-file" name="project_image[]" id="image2" placeholder="" aria-describedby="fileHelpId" >    
                                    </div>
                            </div> --}}
                            
                        </div>

  
                    <button type="submit" class="btn btn-success btn-sm" id="submit_project">Submit</button>
              </form>
            </div>
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
    tinymce.init({selector:'textarea'});
    $("#eimage").change(function(e) {

    for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {

        var file = e.originalEvent.srcElement.files[i];

        var img = document.createElement("img");
        var reader = new FileReader();
        reader.onloadend = function() {
            $('#eblah').attr('src', reader.result);
        }
        reader.readAsDataURL(file);
        $("input").after(img);
    }
    });

  $("#image").change(function(e) {

  for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {

      var file = e.originalEvent.srcElement.files[i];

      var img = document.createElement("img");
      var reader = new FileReader();
      reader.onloadend = function() {
          $('#blah').attr('src', reader.result);
      }
      reader.readAsDataURL(file);
      $("input").after(img);
  }
  });

  $('#submit_project').on('click', function(){
        event.preventDefault();

        var image_header = $('#image').val();
        var image1 = $('#image1').val();
        var image2 = $('#image2').val();
        var image3 = $('#image3').val();
        var image4 = $('#image4').val();
        var content =  tinymce.get("content").getContent();
        var result = true;

        if(!$('#title').val())
        {
          toastr.error("Please enter title")
          result = false;
        }

        if(!$('#address').val())
        {
          toastr.error("Please enter address")
          result = false;
        }

        if(!$('#client').val())
        {
          toastr.error("Please enter client ")
          result = false;
        }

        if(!$('#start_date').val())
        {
          toastr.error("Please enter start date")
          result = false;
        }

        if(!$('#end_date').val())
        {
          toastr.error("Please enter end date")
          result = false;
        }

        if(!content){
          toastr.error("Please enter content")
          result = false;
        }

        if(image_header){
            var file = $('#image')[0].files[0];
            if(file.size > 2000000){
                toastr.error("Maximum image size is 2mb")
                result = false;
            } 
            else{
              result = true;
            }
            
        }
        else{
          toastr.error("Select Image")
          result = false;
        }

        
        

        if(image1){
            var file = $('#image1')[0].files[0];
            if(file.size > 2000000){
                toastr.error("Maximum image size is 2mb")
                result = false;
            } 
            else{
              result = true;
            }
        }

        if(image2){
            var file = $('#image2')[0].files[0];
            if(file.size > 2000000){
                toastr.error("Maximum image size is 2mb")
                result = false;
            } 
            else{
              result = true;
            }
        }

        if(image3){
            var file = $('#image3')[0].files[0];
            if(file.size > 2000000){
                toastr.error("Maximum image size is 2mb")
                result = false;
            } 
            else{
              result = true;
            }
        }

        if(image4){
            var file = $('#image4')[0].files[0];
            if(file.size > 2000000){
                toastr.error("Maximum image size is 2mb")
                result = false;
            } 
            else{
              result = true;
            }
        }

        if(result == true){
         // alert('good');
          $('#form_project').submit();
        }

  });

$('#example').on('click', '.edit', function(){
                var id = $(this).attr('data-id');
                console.log(id);
                $.ajax({
                    method: 'get',
                    url:"{{route('project.get')}}",
                    data:{id:id},
                    success: function(data){
                        console.log(data);
                        // CKEDITOR.instances['econtent'].setData(data.content);
                        $('#id').val(data.id);
                        $('#etitle').val(data.title);
                        $('#eaddress').val(data.address);
                        $('#eclient').val(data.client);
                        $('#estart_date').val(data.start_date);
                        $('#eend_date').val(data.end_date);
                        tinyMCE.get('econtent').setContent(data.content)
                        $('#eblah').attr('src', '/Images/project/'+data.image_header);
                        $('#eimage').val(data.image_header);

                    }
            });
            });
        

});
</script>
@endsection