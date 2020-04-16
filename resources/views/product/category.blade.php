@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" id="blog">
            <h5>Category</h5>
        <a href="{{route('home')}}" style="color:#26D376">Home</a> >> <a href="{{route('admin.product')}}"  style="color:#26D376">Product</a> >> Category
        <div class="float-right">

            <button type="button" class="btn btn-primary buttons mr-auto btn-sm" data-toggle="modal" data-target="#modelId">
                    New Category
            </button>
        </div>
        </div>
       
         
        <div class="col-md-12 mt-5">
            <table class="table table-striped table-inverse text-center table-responsive-sm table-bordered  bg-white shadow" id="example">
                    <thead class="thead-inverse">
                        <tr>
                            <th>S/No</th>
                            <th>Category Name</th>
                            <th>Date Created</th>
                            {{-- <th>Product</th> --}}
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $n=1
                            @endphp
                            @foreach ($categories as $category)
                            <tr>
                                    <td scope="row">{{$n++}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{Carbon\Carbon::parse($category->created_at)->format('d,M Y')}}</td>
                                    {{-- <td>
                                        <a href="" class="btn buttons-success btn-sm">Products ( 0 )</a>
                                    </td> --}}
                                        <td>
                                        <button type="button" class="btn buttons  btn-sm edit" data-toggle="modal" data-target="#edit_details" data-id="{{$category->id}}">
                                            <i class="icon icon-pencil"></i> Edit
                                        </button>
                                        </td>
                                        <td>
                                        <a href="{{route('category.delete', ['id'=>$category->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are You sure you want to delete this ?')"> <i class="icon icon-trash"></i> Delete</a>
                                        </td>
            
                                    </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>

        
        
        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h6 class="modal-title" style="font-weight:300">New Category</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{route('category.create')}}" method="post">
        @csrf
        <div class="modal-body">
        <div class="form-group">
        <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Category Name" aria-describedby="helpId" required>
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary buttons btn-sm">Save</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        
        
        <!-- Button trigger modal -->
        
        
        <!-- Modal -->
        <div class="modal fade" id="edit_details" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
        <h6 class="modal-title" style="font-weight:300">Edit Staff</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{route('category.update')}}" method="post">
        @method('PUT')
        @csrf
        
        <div class="modal-body">
        <input type="hidden" name="id" id="id" class="form-control" placeholder="" aria-describedby="helpId">
        <div class="form-group">
        <input type="text" name="name" id="uname" class="form-control form-control-sm" placeholder="Category Name" aria-describedby="helpId">
        </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="submit" class="btn  buttons btn-sm">Save</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
    </div>



@endsection
@section('js')
<script>
$(document).ready(function(){
$('#example').on('click', '.edit', function(){
var id = $(this).attr('data-id');
// console.log(id);
$.ajax({
method: 'get',
url:"{{route('category.show')}}",
data:{id:id},
success: function(data){
// console.log(data);
$('#id').val(data.id);
$('#uname').val(data.name);

}
});
});

});
</script>
@endsection

