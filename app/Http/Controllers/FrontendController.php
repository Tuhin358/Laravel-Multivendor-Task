<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index (){

        // $post = Admin::get()->all();
        $posts = Admin::where('status',1)->latest()->limit(20)->get();
        return view('front_index',compact('posts'));
     }
}
