<?php

namespace App\Http\Controllers\Admin;

use App\Models\Industry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class IndustryController extends Controller
{
    public function index(Request $request)
    {
        $industries = Industry :: orderBy('created_at','DESC');

        $search = null;

        if($request->search)
        {
            $search = $request->search ;

            $industries = $industries->where('name','LIKE','%'.$search.'%');
        }

        $industries = $industries->get();
        return view('backend.industries.index',compact('industries','search'));
    }

    public function create()
    {
        return view('backend.industries.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
             return back()->with('error',$validator->messages()->first());
         }
        $industry = new Industry;
        $industry->name = $request->name;
        $industry->slug = strtolower(str_replace(' ','-',$request->name));
        $industry->order = (int)$request->order;
        if($request->file('image')){
            $path = $request->file('image')->store('/images/projects', ['disk' =>   'my_files']);
            $industry->img = $path;
        }
        $industry->save();

        return redirect()->route('industries.index')->with('success','Industry Added Successfully');
    }

    public function edit($id)
    {
        $industry = Industry :: find($id);
        if($industry)
        {
            return view('backend.industries.edit',compact('industry'));
        }
        return back()->with('error','Industry Not Found, It May Has Been Deleted');
    }

    public function update(Request $request , $id)
    {
        $industry = Industry :: find($id);
        if($industry)
        {
            $industry->name = $request->name;
            $industry->slug = strtolower(str_replace(' ','-',$request->name));
            $industry->order = (int)$request->order;
            $industry->save();
            if($request->file('image')){
                $path = $request->file('image')->store('/images/projects', ['disk' =>   'my_files']);
                $industry->img = $path;
            }
            $industry->save();

            return redirect()->route('industries.index')->with('success','Industry Updated Successfully');
        }
        return redirect()->route('industries.index')->with('error','Something Went Wrong');
    }

    public function destroy($id)
    {
        Industry::find($id)->delete();
        return back()->with('success','Industry Deleted Successfully');
    }
}
