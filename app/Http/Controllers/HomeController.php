<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Product;
use App\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth::check())
        {

        $blog = Blog::where('published', true)->where('status', false)->count();
        $product = Product::where('status', false)->count();
        $project = Project::where('status', false)->count();

        return view('home', compact('blog', 'product', 'project'));

        }
        else{
            return redirect('login');
        }
    }

    public function profileIndex()
    {
        if(auth::check())
        {
            return view('profile');
        }
        else{
            return redirect('login');
        }
    }

    public function Update(Request $request)
    {
        Db::table('users')->where("id", Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            "updated_at" => Carbon::now(),  
            ]);

            $request->session()->flash('success', 'Profile update successfully!');
            return redirect()->back();
    }

    public function passwordUpdate(Request $request)
    {
        Db::table('users')->where('id', auth::user()->id)->update(['password'=> bcrypt($request->password)]);
        $request->session()->flash('success', 'Password changed successfully!');
            return redirect()->back();
    }

}
