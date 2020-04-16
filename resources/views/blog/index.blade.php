@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" id="blog">
                <h5>BLOG</h5>
            <a href="{{route('home')}}" style="color:#26D376">Home</a> >> Blog
            <p class="float-right">
            <a href="{{route('blog.create')}}" class="btn btn-success btn-sm">New Blog <i class="fas fa-plus    "></i></a>
            </p>
         
            </div>
            <div class="col-md-12" >
                <table class="table table-striped table-inverse table-responsive-sm bg-white shadow" style="font-size:13px; " id="example">
                    <thead class="thead-inverse ">
                        <tr>
                            <th>S/No</th>
                            <th>Date Created</th>
                            <th>Date Modified</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            @php
                                $n = 1
                            @endphp
                            @foreach ($posts as $post)
                            <tr>
                                <td scope="row">{{$n++}}</td>
                                <td>{{carbon\carbon::parse($post->date)->format('d,M Y')}}</td>
                                <td>{{carbon\carbon::parse($post->updated_at)->format('d,M Y')}}</td>
                                <td>{{$post->title}}</td>
                                <td>
                                    @if ($post->published)
                                    <a name="" id="" class=" text-success " href="#" role="button" style="text-decoration:none">Published <i class="fa fa-check" aria-hidden="true"></i></a>
                                    @else
                                    <a name="" id="" class="text-danger" href="#" role="button" style="text-decoration:none">Unpublished <i class="fa fa-check" aria-hidden="true"></i></a> 
                                    @endif
                                </td>
                                <td>
                                <a href="{{route('blog.view', ['id'=>$post->id])}}" class="btn btn-sm buttons" style="font-weight:300">Edit <i class="fas fa-edit    "></i></a>
                                </td>
                                <td>
                                    @if ($post->published)
                                    <a href="{{route('blog.publish', ['id'=>$post->id])}}" class="btn buttons btn-sm">Unpublish</a>
                                    @else
                                    <a href="{{route('blog.publish', ['id'=>$post->id])}}" class="btn buttons btn-sm">Publish</a>
                                    @endif             
                                </td>
                                <td>
                                    <a href="{{route('blog.delete', ['id'=>$post->id])}}"  class="btn buttons_red btn-sm" onclick="return confirm('are you sure you want to delete this?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

