<?php

namespace App\Http\Controllers\Admin;

use App\Models\Platform;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PlatformController extends Controller
{
    public function index(Request $request)
    {
        $platforms = Platform :: orderBy('created_at','DESC');

        $search = null;

        if($request->search)
        {
            $search = $request->search ;

            $platforms = $platforms->where('title','LIKE','%'.$search.'%');
        }

        $platforms = $platforms->get();
        return view('backend.platforms.index',compact('platforms','search'));
    }

    public function create()
    {
        return view('backend.platforms.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
             return back()->with('error',$validator->messages()->first());
         }
        $platform = new Platform;
        $platform->title = $request->title;
        $platform->slug = strtolower(str_replace(' ','-',$request->title));
        $platform->desc = $request->desc;
        $platform->subtitle = $request->subtitle;
        $platform->order = (int)$request->order;

        if($request->file('image')){
            $path = $request->file('image')->store('/images/projects', ['disk' =>   'my_files']);
            $platform->img = $path;
        }
        $platform->save();

        return redirect()->route('platforms.index')->with('success','Platform Added Successfully');
    }

    public function edit($id)
    {
        $platform = Platform :: find($id);
        if($platform)
        {
            return view('backend.platforms.edit',compact('platform'));
        }
        return back()->with('error','Platform Not Found, It May Has Been Deleted');
    }

    public function update(Request $request , $id)
    {
        $platform = Platform :: find($id);
        if($platform)
        {
            $platform->title = $request->title;
            $platform->slug = strtolower(str_replace(' ','-',$request->title));
            $platform->desc = $request->desc;
            $platform->subtitle = $request->subtitle;
            $platform->order = (int)$request->order;

            if($request->file('image')){
                $path = $request->file('image')->store('/images/projects', ['disk' =>   'my_files']);
                $platform->img = $path;
            }
            $platform->save();

            return redirect()->route('platforms.index')->with('success','Platform Updated Successfully');
        }
        return redirect()->route('platforms.index')->with('error','Something Went Wrong');
    }

    public function destroy($id)
    {
        Platform::find($id)->delete();
        return back()->with('success','Platform Deleted Successfully');
    }
}
