<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Category;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index(){
     
            if(auth::check()){
                $products = Product::latest()->where('status', false)->get();
            $categories = Category::where('deleted', false)->get();
            //dd($products);
            return view('product.index', compact('products', 'categories'));
            }
            else{
                return redirect('login');
            }
        
    }
    public function category()
    {
        if(auth::check()){
            $categories = DB::table('categories')->latest()->where('deleted', false)->get();
        return view('product.category', compact('categories'));
        }
        else{
            return redirect('login');
        }
    }

    public function categoryshow(Request $request)
    {
        $category = DB::table('categories')->where('id', $request->id)->first();
        return response()->json($category);
    }

    public function createcategory(Request $request)
    {
         
            $category = new Category;
            $category->name = $request->input('name');

            if (DB::table('categories')->where('name', $request->input('name'))->exists())
            {
                return redirect()->back()->with('error', 'Category Name already exists');

            }
            else
            {
                $category->save();

                return back()->with('success', 'Category created Successfully');
            }
        
    }
    
    public function categoryupdate(Request $request)
    {

            if (DB::table('categories')->where('name', $request->input('name'))->where('id', '!=', $request->id)->where('deleted', false)->exists())
            {
                return redirect()->back()->with('error', 'Category name already exists');

            }
            else
            {
                $category = DB::table('categories')->where('id', $request->id)->update([
                    "name" => $request->name
                ]);


                return back()->with('success', 'Category Updated Successfully');
            }
        

    }

    public function categorydelete($id)
    {
        $category = DB::table('categories')->where('id', $id)->update([
            'deleted' => true
        ]);
        return back()->with('success', 'Category Deleted Successfully');
    }

    public function productcreate(Request $request)
    {

      
            $product = new product;
            $product->name = $request->input('name');
            $product->category_id = $request->category;
            if($request->image){
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('Images/product/'. $filename);
                Image::make($image)->save($location);
                $product->image = $filename;
            }
            if (DB::table('products')->where('name', $request->input('name'))->exists())
            {
                return redirect()->back()->with('error', 'Product name already exists');

            }
            else
            {
                $product->save();

                return back()->with('success', 'Product saved Successfully');
            }
       
    }

    public function productshow(Request $request)
    {
        $category = DB::table('products')->where('id', $request->id)->first();
        return response()->json($category);
    }

    public function productupdate(Request $request)
    {
            if (DB::table('products')->where('name', $request->input('name'))->where('id', '!=', $request->id)->where('status', false)->exists())
            {
                return redirect()->back()->with('error', 'Product name already exists');

            }
            else
            {
                $product = Product::where('id', $request->id)->first();
                        $product->name = $request->name;
                        $product->category_id =$request->category;
                        if($request->image){
                            File::delete('Images/product/'.$product->image);
                            $image = $request->file('image');
                            $filename = time() . '.' . $image->getClientOriginalExtension();
                            $location = public_path('Images/product/'. $filename);
                            Image::make($image)->save($location);
                            $product->image = $filename;
                        }
                    $product->save();


                return back()->with('success', 'Product Updated Successfully');

        }

        
    }

    public function productdelete($id)
    {
        $product = Product::where('id', $id)->first();
        $product->status = true;
        File::delete('Images/product/'.$product->image);

        return back()->with('success', 'Product Deleted Successfully');
    }

}
