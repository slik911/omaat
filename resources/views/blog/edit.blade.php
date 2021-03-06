@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h5>BLOG</h5>
            <a href="{{route('home')}}" style="color:#26D376">Home</a> >> <a href="{{route('admin.blog')}}" style="color:#26D376">Blog</a> >> {{$post->title}} 

            </div>
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-md-7 ">
                        <div class="card py-5 pb-3 pl-3 pr-3 bg-white shadow" style="border:none">
                            <h6 style="color:#26D376" class="pb-2">Edit Post</h6>
                            <form action="{{route('post.edit')}}" id="form_post" method="post" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              @method('put')
                              <input type="hidden" name="id" id="id" class="form-control form-control form-control-sm" placeholder="" value="{{$post->id}}" aria-describedby="helpId" required>
                              
                              <div class="form-group">
                                <label for="title">Title</label>
                              <input type="text" name="title" id="title" class="form-control form-control form-control-sm" placeholder="" value="{{$post->title}}" aria-describedby="helpId" required>
                              </div>
  
                              <div class="form-group">
                                  <label class="form-label">Date </label>
                              <input type="date" name="date" id="date" class="form-control form-control form-control-sm" placeholder="" value="{{$post->date}}" aria-describedby="helpId" required>
                              </div>
                              <br>
                              <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control" id="content" cols="100" rows="20" required>{{$post->content}}
                                </textarea>
                              </div>
                             

  
  
                              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Image</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="pills-video-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Video</a>
                                </li>
  
                              </ul>
                              <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                  <div class="form-group">
                                    <label for="">Upload Image</label>
                                    <input type="file" class="form-control-file" name="image" id="image" placeholder="" aria-describedby="fileHelpId">
                                    <small id="fileHelpId" class="form-text text-muted">Max 2mb</small>
                                  </div>
                                  <div class="col-md-5" style=" border:1px solid #ccc; padding:0px;">
                                  <img id="blah" src="{{asset('Images/blog_image/'.$post->image)}}"  class="img-fluid" style="width:100%; height:250px; object-fit:cover; padding:0px;" />
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                  <div class="form-group">
                                    <label for="">Upload Video</label>
                                    <input type="file" class="form-control-file" name="video" id="video" placeholder="" aria-describedby="fileHelpId">
                                    <small id="fileHelpId" class="form-text text-muted">Max 10mb</small>
                                  </div>
                        
                                  
                                </div>
  
                              </div>
  
                      <div class="modal-footer">
             
                        <button type="submit" class="btn  btn-success" id="submit_post">Save Changes</button>
                      </div>
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

        tinymce.init({selector:'textarea'});

        $("#image").change(function(e) {

        for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {

            var file = e.originalEvent.srcElement.files[i];

            var img = document.createElement("img");
            var reader = new FileReader();
            reader.onloadend = function() {
                $('#blah').show();
                $('#blah').attr('src', reader.result);
            }
            reader.readAsDataURL(file);
            $("input").after(img);
        }
        });

        

        $('#submit_post').click(function(){
          event.preventDefault()
    
          var image = $('#image').val();
          var vid = $('#video').val();
        
          if(image){
                  
                  var file = $('#image')[0].files[0];
                  var size1 = file.size;
                 
                  
                  if(size1 > 2000000 ){

                    toastr.error("Maximum image size exceeds 2mb ");
                  } 
                  else{
                    $('#form_post').submit();
                  }

                 

                }
              if(vid){
                  var video = $('#video')[0].files[0];
                  var size2 = video.size;
           
                   if(size2 >10000000){

                    toastr.error("Maximum video size exceeds 10mb ");
                  }
                  else{
                    $('#form_post').submit();
                  }
                }
                if(!image && !vid){
                 $('#form_post').submit();
                }
         
        
        

        
          
        });

       });
    </script>
@endsection
