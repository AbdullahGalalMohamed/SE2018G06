<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function country(){
        return view('pages.service.country');
    }

    public function university1(){
        return view('pages.service.university1');
    }
    

    public function scholarships(){
        return view('pages.service.scholarships');
    }
// view data
    public function returnDatabase(){
        $countrys = DB::table('country')->get();
        $universitys = DB::table('university')->get();
        $scholarships = DB::table('scholarship')->get();
        return view('pages.service.university')->with(array('countrys'=>$countrys, 'universitys'=>$universitys,'$scholarships'=>$scholarships));
        
    }
  
    public function show(){
        $countrys = DB::table('country')->get();
        $universitys = DB::table('university')->get();
        $scholarships = DB::table('scholarship')->get();
        return view('pages.service.country')->with(array('countrys'=>$countrys, 'universitys'=>$universitys,'$scholarships'=>$scholarships));
        
    }

    public function store(Request $request)
    {
        
            $post=new comment;
           // $post->user_name=$request->input('title');
            $post->comment =$request->input('body');
            $post->save();
            //return redirect('/')->with('success','post created');
    }
    

}

    