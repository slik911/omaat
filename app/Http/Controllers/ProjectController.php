<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Project;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function index(){

        if(auth::check()){
            $projects = Project::where('status', false)->cursor();
        return view('project.index', compact('projects'));
        }
        else{
            return redirect('login');
        }

    }

    public function project(Request $request)
    {
        $project = new Project;

        $project->title = $request->title;
        $project->address = $request->address;
        $project->client = $request->client;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->content = $request->content;
        
        if($request->file('image') !=  null)
            {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('Images/project/'. $filename);
            Image::make($image)->save($location);
            $project->image_header = $filename;
            }

            if($request->file('project_image') != null){
                foreach($request->file('project_image') as $image)
                {
                    $name=rand(1, 10000000).time(). '.' . $image->getClientOriginalExtension();
                    $location = public_path('Images/project/'. $name);
                    Image::make($image)->save($location);  
                    $data[] = $name;  
                }
                $project->project_images=json_encode($data);
            }
      
        $project->save();
        return back()->with('success', 'Project added successfully!');
    }

    public function getProject(Request $request){
        $project = DB::table('projects')->where('id', $request->id)->first();
        return response()->json($project);
    }

    public function update(Request $request){
        $project = Project::where('id', $request->id)->first();
       
        $project->title = $request->title;
        $project->address = $request->address;
        $project->client = $request->client;
        $project->start_date = $request->start_date;
        $project->end_date = $request->end_date;
        $project->content = $request->econtent;
        if($request->file('image') !=  null)
            {
                File::delete('Images/project/'.$project->image_header);
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('Images/project/'. $filename);
                Image::make($image)->save($location);
                $project->image_header = $filename;
            }
        $project->save();
        $request->session()->flash('success', 'Project update successfully!');
        return redirect()->back();
    }

    public function delete($id){
        $project = Project::where('id', $id)->first(); 
        $project->status = true;
        File::delete('Images/project/'.$project->image_header);
        if($project->project_images){
            foreach (json_decode($project->project_images) as $picture){
                File::delete('Images/project/'.$picture);
            }
        }
        $project->save();
        
        return back()->with('success', 'Project update successfully!');
    }
}
