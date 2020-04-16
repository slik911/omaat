<?php

namespace App\Http\Controllers;

use App\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index(){
        if(auth::check()){
            $posts = DB::table('blogs')->where('status', false)->cursor();
            return view('blog.index', compact('posts'));
        }
        else{
            return redirect('login');
        }
        
    }

    public function create(){
        if(auth::check()){
            return view('blog.create');
        }
        else{
            return redirect('login');
        }
        
    }

    public function save(Request $request)
    {
       
            $blog = new Blog;
            $blog->title = $request->title;
            $blog->date = $request->date;
            $blog->content = $request->content;
        
            if($request->image){
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('Images/blog_image/'. $filename);
                Image::make($image)->save($location);
                $blog->image = $filename;
            }

            if($request->video){
                $video = $request->file('video');
                $vid = time() . '.' . $video->getClientOriginalExtension();
                $path = public_path().'/Images/blog_video/';
                $video->move($path, $vid);
                $blog->video = $vid;
            }

            $blog->save();
            return back()->with('success', "Post published successfully");
    }

    public function view($id){

        if(auth::check()){
            $post = $posts = DB::table('blogs')->where('id', $id)->first();
            return view('blog.edit', compact('post'));
        }
        else{
            return redirect('login');
        }
      
    }

    public function update(Request $request){
        $post = Blog::where('id', $request->id)->first();
        $post->title = $request->title;
        $post->date = $request->date;
        $post->content = $request->content;

        if($request->image){
            
            File::delete('Images/blog_video/'.$post->video);
            $post->video = null;
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('Images/blog_image/'. $filename);
            Image::make($image)->save($location);
            $post->image = $filename;
        }

        if($request->video){
            File::delete('Images/blog_image/'.$post->image);
            $post->image = null;
            $video = $request->file('video');
            $vid = time() . '.' . $video->getClientOriginalExtension();
            $path = public_path().'/Images/blog_video/';
            $video->move($path, $vid);
            $post->video = $vid;
        }

        $post->save();
        return back()->with('success', "Post updated successfully");    
    }

    public function publish($id){
        $post = Blog::where('id', $id)->first();
        $post->published = !$post->published;
        $post->save();

        $post = Blog::where('id', $id)->first();
        if($post->published){
            return back()->with('success', "Post published successfully"); 
        }
        else{
            return back()->with('success', "Unpublished successfully");  
        }
       
    }


    public function delete($id){
        $post = Blog::where('id', $id)->first();
        $post->status = true;
        File::delete('Images/blog_image/'.$post->image);
        File::delete('Images/blog_video/'.$post->video);
        $post->save();

        return back()->with('success', "Post deleted successfully"); 
    }
}
