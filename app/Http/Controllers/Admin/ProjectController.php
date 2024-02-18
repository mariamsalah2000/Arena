<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Storage;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project :: orderBy('created_at','DESC');

        $search = null;

        if($request->search)
        {
            $search = $request->search ;

            $projects = $projects->where('name','LIKE','%'.$search.'%');
        }
        $projects = $projects->get();
        return view('backend.projects.index',compact('projects','search'));
    }

    public function create()
    {
        return view('backend.projects.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'desc' => 'required|string',
        ]);

        if ($validator->fails()) {
             return back()->with('error',$validator->messages()->first());
         }
        $project = new Project;
        $project->name = $request->name;
        $project->slug = strtolower(str_replace(' ','-',$request->name));
        $project->order = (int)$request->order;
        $project->desc = $request->desc;
        $project->save();
        if($request->file('image')){
            $path = $request->file('image')->store('/images/projects', ['disk' =>   'my_files']);
            $project->img = $path;
            $project->save();
        }
        return redirect()->route('projects.index')->with('success','Project Added Successfully');
    }

    public function edit($id)
    {
        $project = Project :: find($id);
        if($project)
        {
            return view('backend.projects.edit',compact('project'));
        }
        return back()->with('error','Project Not Found, It May Has Been Deleted');
    }

    public function update(Request $request , $id)
    {
        $project = Project :: find($id);
        if($project)
        {
            $project = new Project;
            $project->name = $request->name;
            $project->slug = strtolower(str_replace(' ','-',$request->name));
            $project->order = (int)$request->order;
            $project->desc = $request->desc;
            $project->save();

            if($request->file('image')){
                $path = $request->file('image')->store('/images/projects', ['disk' =>   'my_files']);
                $project->img = $path;
                $project->save();
            }
            return redirect()->route('projects.index')->with('success','Project Updated Successfully');
        }
        return redirect()->route('projects.index')->with('error','Something Went Wrong');
    }

    public function destroy($id)
    {
        Project::find($id)->delete();
        return back()->with('success','Project Deleted Successfully');
    }
}
