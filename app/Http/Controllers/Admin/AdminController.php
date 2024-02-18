<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactRequest;
use App\Models\Config;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $contacts = ContactRequest::where('done',0)->orderBy('created_at','DESC')->limit(5);
        return view('backend.dashboard',compact('contacts'));
    }

    public function contactRequests(Request $request)
    {
        $requests = ContactRequest::orderBy('created_at','DESC');
        $search = null;
        if($request->search)
        {
            $search = $request->search;
            $requests = $requests->where('name','LIKE','%'.$search.'%')->orWhere('phone','LIKE','%'.$search.'%')->orWhere('inquiry','LIKE','%'.$search.'%');
        }
        $requests = $requests->paginate(15);
        return view('backend.contact.index',compact('requests'));
    }

    public function ContactRequest($id)
    {
        $contact = ContactRequest::find($id);
        return view('backend.contact.view',compact('contact'));
    }

    public function destroyContactRequest($id)
    {
        $contact = ContactRequest::findOrFail($id)->delete();
        return back()->with('success', "Request Deleted Successfully");
    }

    public function configs()
    {
        $configs = Config::orderBy('created_at','DESC')->get();
        return view('backend.configs.index',compact('configs'));
    }
    public function edit_configs($id)
    {
        $config = Config::find($id);
        if($config)
        {
            return view('backend.configs.edit',compact('config'));
        }
        return back()->with('error','Something went wrong');
    }
    public function update_configs(Request $request, $id)
    {
        $config = Config::find($id);
        if($config)
        {
            $config->value = $request->value;
            $config->save();
            return view('backend.configs.index')->with('success','Configuration Updated Successfully');

        }
        return back();
    }


}
