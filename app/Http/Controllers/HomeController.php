<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\Industry;
use App\Models\PlatformDetail;
use App\Models\Project;
use App\Models\Category;
use App\Models\Platform;
use App\Models\Accessory;
use Illuminate\Http\Request;
use App\Models\ContactRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index()
    {
        $platforms = Platform::orderBy('order', 'ASC')->orderBy('created_at', 'desc')->get();
        $projects = Project::orderBy('order', 'ASC')->orderBy('created_at', 'desc')->get();
        return view('frontend.index',compact('platforms','projects'));
    }
    public function platform($slug)
    {
        $platforms = Platform::orderBy('order', 'ASC')->orderBy('created_at', 'desc')->get();
        $platform = Platform::where('slug',$slug);
        if(!$platform)
            return redirect('/');
        $details = PlatformDetail::where('platform_id',$platform->id)->orderBy('order', 'ASC')->orderBy('created_at', 'desc')->get();
        return view('frontend.tour-platform',compact('platforms','details','platform'));
    }
    public function industries()
    {
        $platforms = Platform::orderBy('order', 'ASC')->orderBy('created_at', 'desc')->get();
        $industries = Industry::orderBy('order','ASC')->orderBy('created_at','DESC')->get();
        return view('frontend.tour-by-industry',compact('platforms','industries'));
    }
    public function about()
    {
        $platforms = Platform::orderBy('order', 'ASC')->orderBy('created_at', 'desc')->get();
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        return view('frontend.about',compact('footer'));
    }
    public function contact()
    {
        $platforms = Platform::orderBy('order', 'ASC')->orderBy('created_at', 'desc')->get();
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        return view('frontend.contact',compact('footer'));
    }
    public function blog()
    {

        $posts = Blog::orderBy('order','ASC')->get();
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        return view('frontend.blog',compact('posts','footer'));
    }
    public function marketplace()
    {
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        return view('frontend.market-place',compact('footer','accessories'));
    }

    public function blog_details()
    {

        //$post = Blog::where('slug',$id)->first();
        $post = true;
        if($post)
        {
            $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
            return view('frontend.blog-details',compact('post','footer'));
        }

        return redirect('/');
    }


    public function careers()
    {

        $categories = Category::orderBy('order','ASC')->orderBy('created_at','DESC')->get();
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        return view('frontend.careers',compact('categories','footer'));
    }
    

    public function success_stories()
    {

        $categories = Category::orderBy('order','ASC')->orderBy('created_at','DESC')->get();
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        return view('frontend.success-stories',compact('categories','footer'));
    }

    public function creative_services()
    {

        $categories = Category::orderBy('order','ASC')->orderBy('created_at','DESC')->get();
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        return view('frontend.creative-services',compact('categories','footer'));
    }
    public function partners()
    {

        $categories = Category::orderBy('order','ASC')->orderBy('created_at','DESC')->get();
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        return view('frontend.partner',compact('categories','footer'));
    }
    public function category($id)
    {

        $category = Category::where('slug',$id)->first();
        if($category)
        {
            $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
            return view('frontend.product-details',compact('category','footer'));
        }

        return redirect('/');
    }

    public function projects()
    {

        $projects = Project::orderBy('order','ASC')->get();
        $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
        return view('frontend.projects',compact('projects','footer'));
    }

    public function project($id)
    {

        $project = Project::where('slug',$id)->first();

        if($project)
        {
            $footer = Project::orderBy('order', 'ASC')->limit(3)->get();
            return view('frontend.project-details',compact('project','footer'));
        }


        return redirect('/');
    }

    public function contact_post(Request $request)
    {
        $contact = new ContactRequest();
        $contact->phone =  $request->phone?:'N/A';
        $contact->subject =  $request->subject?:'N/A';
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->inquiry = $request->message;

        if($contact->save()){
            $data = $contact->toArray();
            Mail::send("backend.contact.view", $data , function ($message){
                $message->to('info@grandgate-doors.com');
                $message->subject('New Contact Request');
            });
            Mail::send("backend.contact.view", $data , function ($message){
                $message->to('grandgatedoor@gmail.com');
                $message->subject('New Contact Request');
            });
            return back()->with('success','Message Sent Successfully');
        }

        return back()->with('error','Something Went Wrong');
    }
}
