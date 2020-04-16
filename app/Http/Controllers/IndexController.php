<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use App\Product;
use App\Project;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Mail;
class IndexController extends Controller
{
    public function index(){
        $blogs = Blog::latest()->where('published', true)->where('status', false)->take(3)->get();
        $projects = Project::latest()->where('status', false)->take(6)->pluck('image_header');
        // dd($projects);
        return view("welcome", compact('blogs', 'projects'));
    }
    public function about(){
        return view("about");
    }

    public function portfolio(){
        $projects = Project::latest()->where('status', false)->paginate(8);
        
        return view("portfolio", compact('projects'));
    }

    public function singleportfolio($id){
        $project = Project::where('id', $id)->first();
        $rpj = Project::latest()->where('status', false)->take(5)->cursor();
        return view("single_portfolio", compact('project', 'rpj'));
    }

    public function service(){
        return view('service');
    }

    public function product(){
        $categories = Category::where('deleted', false)->cursor();
        return view("product", compact('categories'));
    }

    public function productCategory($id){
        $products = Product::where('category_id', $id)->where('status', false)->cursor();
        $category = Category::where('id', $id)->first();
        return view('product_category', compact('products', 'category'));
    }

    public function blog(){
        $blogs = Blog::latest()->where('published', true)->where('status', false)->paginate(10);
        return view("blog", compact('blogs'));
    }

    public function singleblog($id){
        $blog = Blog::where('id', $id)->first();
        $rblog = Blog::latest()->where('published', true)->where('status', false)->take(5)->cursor();
        return view("single_blog", compact('blog', 'rblog'));
    }

    public function contact(){
        return view("contact");
    }

    public function contactMe(Request $request){
        Mail::send('email.Contactmail', ['msg' => $request->message, 'name' => $request->name, 'sub' => $request->subject, 'email'=> $request->email], function ($mail) use ($request)  {
            $mail -> to('enquiries@omaatkneel.com');
            $mail -> replyto($request->email);
            $mail -> subject($request->subject);
            $mail -> from($request->email, $request->name);
        });
 
        $request->session()->flash('success', 'Mail Sent!');
        return redirect()->back();
    }

    public function cleaning(){
        return view('cleaning');
    }

    public function pestControl(){
        return view('pest_control');
    }
    public function electrical(){
        return view('electrical');
    }
    public function laundry(){
        return view('laundry');
    }
    public function facility(){
        return view('facility_solutions');
    }
    public function training(){
        return view('training');
    }

    public function qms(){
        return view('qms');
    }

    public function hse(){
        return view('hse');
    }
}
