<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requests;
use App\Messages;

class websiteController extends Controller
{
    public function index(){

    	return view('index');
    }


    public function servicesPage(){

    	return view('services');
    }


    public function requestPage(){

    	return view('request');
    }

    public function requestAdd(Request $request , Requests $req){

    	 $req->project_name = $request->project_name;
         $req->type_activity = $request->type_activity;
         $req->target_group = $request->target_group;
         $req->description = $request->description;

         $req ->save();

         return redirect()->back()->with('success', 'تم تقديم طلبكم بنجاح وسيتم الرد عليه باسرع وقت ✓✓');
    }


    public function contactusPage(){

    	return view('contactus');
    }

    public function messageAdd(Request $request , Messages $message){

    	 $message->name = $request->name;
         $message->email = $request->email;
         $message->message = $request->message;
         $message->file = $request->file;

         $message ->save();

         return redirect()->back()->with('success', 'تم تقديم طلبكم بنجاح وسيتم الرد عليه باسرع وقت ✓✓');
    }


    public function teamPage(){

    	return view('team');
    }
}
