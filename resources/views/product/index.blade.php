@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="blog">
            <h5>Product</h5>
        <a href="{{route('home')}}" style="color:#26D376">Home</a> >> Product
        <p class="float-right">
        <button type="button" class="btn btn-primary buttons mr-auto btn-sm" data-toggle="modal" data-target="#modelId">
            New Product
        </button>
        <a href="{{route('category.index')}}" class="btn btn-secondary btn-sm">Category</i></a>
    </p>

    <table class="table table-striped table-inverse text-center table-responsive-sm table-bordered bg-white shadow" id="example" >
        <thead class="thead-inverse">
            <tr>
                <th>S/No</th>
                <th>Date Created</th>
                <th>Category Name</th>
                <th>Product Name</th>
                <th></th>

                <th></th>
            </tr>
            </thead>
            <tbody>
                @php
                    $n=1
                @endphp
                @foreach ($products as $product)
                <tr>
                        <td scope="row">{{$n++}}</td>
                        <td>{{Carbon\carbon::parse($product->date)->format('d,M Y')}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->name}}</td>
                            <td>
                            <button type="button" class="btn buttons  btn-sm edit" data-toggle="modal" data-target="#edit_details" data-id="{{$product->id}}">
                                <i class="icon icon-pencil"></i> Edit
                            </button>
                            </td>
                            <td>
                            <a href="{{route('product.delete', ['id'=> $product->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You sure you want to delete this ?')"> <i class="icon icon-trash"></i> Delete</a>
                            </td>

                        </tr>
                @endforeach
            </tbody>
    </table>
        </div>
    </div>
</div>

 <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-weight:300">New Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        <form action="{{route('product.create')}}" method="post" id="form_post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                      <div class="form-group">
                      <select class="form-control form-control-sm" name="category" id="category" required>
                          <option value="">Choose Category</option>
                          @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                      </select>
                      </div>
                      <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Product Name" aria-describedby="helpId" required>
                      </div>
                      <div class="form-group">
                        <label for="">Upload Image</label>
                        <input type="file" class="form-control-file" name="image" id="image" placeholder="" aria-describedby="fileHelpId">
                        <small id="fileHelpId" class="form-text text-muted">Max 2mb</small>
                      </div>
                      <div class="col-md-6" style=" border:1px solid #ccc; padding:0px;">
                          <img id="blah" src="#"  class="img-fluid" style="width:100%; height:250px; object-fit:cover; padding:0px;" />
                      </div>


                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary buttons btn-sm" id="submit_post">Save</button>
                  </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="edit_details" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-weight:300">Edit Product Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        <form action="{{route('product.update')}}" id="form_update" method="post">
              @method('PUT')
              @csrf

              <div class="modal-body">
                      <input type="hidden" name="id" id="id" class="form-control"  aria-describedby="helpId">
                      <div class="form-group">
                      <select class="form-control form-control-sm" name="category" id="ucategory">
                          <option value="">Choose Category</option>
                          @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                      </select>
                      </div>
                      <div class="form-group">
                        <input type="text" name="name" id="uname" class="form-control form-control-sm" placeholder="Product Name" aria-describedby="helpId">
                      </div>
                      <div class="form-group">
                        <label for="">Upload Image</label>
                        <input type="file" class="form-control-file" name="image" id="uimage" placeholder="" aria-describedby="fileHelpId">
                        <small id="fileHelpId" class="form-text text-muted">Max 2mb</small>
                      </div>
                      <div class="col-md-6" style=" border:1px solid #ccc; padding:0px;">
                          <img id="ublah" src="#"  class="img-fluid" style="width:100%; height:250px; object-fit:cover; padding:0px;" />
                      </div>


                  </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary buttons btn-sm" id="update_post">Save</button>
                </div>
          </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
       $(document).ready(function(){
           $('#blah').hide();
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
          var video = $('#video').val();
          var category = $('#category').val();
          var name = $('#name').val();

          if(!category){
            toastr.error("Enter category");
          }
          else if(!name){
            toastr.error("Enter product name");
          }
          else if(!image ){
            toastr.error("Please upload image");
          }
          else{
            
            var file = $('#image')[0].files[0];
                console.log(file.size)

                if(file.size > 2000000){

                  toastr.error("Maximum image size is 2mb")
                } 

                else{
                  $('#form_post').submit();
                }
          }
          
        });


        $('#update_post').click(function(){
          event.preventDefault()

          var image = $('#uimage').val();
          var category = $('#ucategory').val();
          var name = $('#uname').val();

          if(!category){
            toastr.error("Enter category");
          }
          else if(!name){
            toastr.error("Enter product name");
          }
        //   else if(!image ){
        //     toastr.error("Please upload image");
        //   }
          else{
            
            var file = $('#uimage')[0].files[0];
                console.log(file.size)

                if(file.size > 2000000){

                  toastr.error("Maximum image size is 2mb")
                } 

                else{
                  $('#form_update').submit();
                }
          }
          
        });


        $('#example').on('click', '.edit', function(){
                var id = $(this).attr('data-id');
                // console.log(id);
                $.ajax({
                    method: 'get',
                    url:"{{route('product.show')}}",
                    data:{id:id},
                    success: function(data){
                        //console.log(data.category);
                        $('#id').val(data.id);
                        $('#uname').val(data.name);
                        $('#ucategory').val(data.category_id);
                    
                        $('#ublah').attr('src', '/Images/product/'+data.image);
                    }
            });
            });


            $("#uimage").change(function(e) {

for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {

    var file = e.originalEvent.srcElement.files[i];

    var img = document.createElement("img");
    var reader = new FileReader();
    reader.onloadend = function() {
        $('#ublah').show();
        $('#ublah').attr('src', reader.result);
    }
    reader.readAsDataURL(file);
    $("input").after(img);
}
});
       });
    </script>
@endsection
