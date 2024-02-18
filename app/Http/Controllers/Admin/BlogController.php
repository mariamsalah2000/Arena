<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blog = Blog :: orderBy('created_at','DESC');

        $search = null;

        if($request->search)
        {
            $search = $request->search ;

            $blog = $blog->where('name','LIKE','%'.$search.'%');
        }

        $blog = $blog->get();
        return view('backend.blog.index',compact('blog','search'));
    }

    public function create()
    {
        return view('backend.blog.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:100',
        ]);

        if ($validator->fails()) {
             return back()->with('error',$validator->messages()->first());
         }
        $blog = new Blog;
        $blog->name = $request->name;
        $blog->slug = strtolower(str_replace(' ','-',$request->name));
        $blog->description = $request->description;
        $blog->title = $request->title;
        $blog->order = (int)$request->order;
        //arabic
        $blog->name_ar = $request->name_ar;
        $blog->slug_ar = strtolower(str_replace(' ','-',$request->name_ar));
        $blog->description_ar = $request->description_ar;
        $blog->title_ar = $request->title_ar;

        if($request->file('cover')){
            $path = $request->file('cover')->store('/images/projects', ['disk' =>   'my_files']);
            $blog->cover = $path;
        }
        if($request->file('image')){
            $path = $request->file('image')->store('/images/projects', ['disk' =>   'my_files']);
            $blog->image = $path;
        }
        $blog->save();

        return redirect()->route('blog.index')->with('success','Blog Added Successfully');
    }

    public function edit($id)
    {
        $blog = Blog :: find($id);
        if($blog)
        {
            return view('backend.blog.edit',compact('accessory'));
        }
        return back()->with('error','Blog Not Found, It May Has Been Deleted');
    }

    public function update(Request $request , $id)
    {
        $blog = Blog :: find($id);
        if($blog)
        {
            $blog->name = $request->name;
            $blog->slug = strtolower(str_replace(' ','-',$request->name));
            $blog->order = (int)$request->order;
            $blog->description = $request->description;
            $blog->title = $request->title;
            //arabic
            $blog->name_ar = $request->name_ar;
            $blog->slug_ar = strtolower(str_replace(' ','-',$request->name_ar));
            $blog->description_ar = $request->description_ar;
            $blog->title_ar = $request->title_ar;



            if($request->file('cover')){
                $path = $request->file('cover')->store('/images/projects', ['disk' =>   'my_files']);
                $blog->cover = $path;
            }

            if($request->file('image')){
                $path = $request->file('image')->store('/images/projects', ['disk' =>   'my_files']);
                $blog->image = $path;
            }
            $blog->save();

            return redirect()->route('blog.index')->with('success','Blog Updated Successfully');
        }
        return redirect()->route('blog.index')->with('error','Something Went Wrong');
    }

    public function destroy($id)
    {
        Blog::find($id)->delete();
        return back()->with('success','Blog Deleted Successfully');
    }
}
