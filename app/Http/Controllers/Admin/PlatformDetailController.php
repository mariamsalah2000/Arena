<?php

namespace App\Http\Controllers\Admin;

use App\Models\PlatformDetail;
use Illuminate\Http\Request;
use App\Models\Platform;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PlatformDetailController extends Controller
{
    public function index(Request $request)
    {
        $details = PlatformDetail :: orderBy('created_at','DESC');

        $search = null;

        if($request->search)
        {
            $search = $request->search ;

            $details = $details->where('title','LIKE','%'.$search.'%');
        }

        $details = $details->get();
        return view('backend.platform_details.index',compact('details','search'));
    }

    public function create()
    {
        $platforms = Platform::orderBy('created_at', 'desc')->get();
        return view('backend.platform_details.create',compact('platforms'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
             return back()->with('error',$validator->messages()->first());
         }
        $detail = new PlatformDetail;
        $detail->title = $request->title;
        $detail->desc = $request->desc;
        $detail->order = (int)$request->order;
        $platform = Platform::find($request->platform_id);
        if(!$platform)
         return back()->with('error',"Platform not found");
        $detail->platform_id = $platform->id;
         

        if($request->file('image')){
            $path = $request->file('image')->store('/images/projects', ['disk' =>   'my_files']);
            $detail->img = $path;
        }
        $detail->save();

        return redirect()->route('platform_details.index')->with('success','PlatformDetail Added Successfully');
    }

    public function edit($id)
    {
        $detail = PlatformDetail :: find($id);
        $platforms = Platform::orderBy('created_at', 'desc')->get();
        if($detail)
        {
            return view('backend.platform_details.edit',compact('detail','platforms'));
        }
        return back()->with('error','PlatformDetail Not Found, It May Has Been Deleted');
    }

    public function update(Request $request , $id)
    {
        $detail = PlatformDetail :: find($id);
        if($detail)
        {
            $detail->title = $request->title;
            $detail->desc = $request->desc;
            $detail->order = (int)$request->order;
            $platform = Platform::find($request->platform_id);
            if(!$platform)
                return back()->with('error',"Platform not found");
            $detail->platform_id = $platform->id;

            if($request->file('image')){
                $path = $request->file('image')->store('/images/projects', ['disk' =>   'my_files']);
                $detail->img = $path;
            }
            $detail->save();

            return redirect()->route('platform_details.index')->with('success','PlatformDetail Updated Successfully');
        }
        return redirect()->route('platform_details.index')->with('error','Something Went Wrong');
    }

    public function destroy($id)
    {
        PlatformDetail::find($id)->delete();
        return back()->with('success','PlatformDetail Deleted Successfully');
    }
}
