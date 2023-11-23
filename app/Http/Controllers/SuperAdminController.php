<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Admin::get();
        return view("superadmin.index",compact("posts"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    //  Change-Status

 public function changeStatus($id){
    $getStatus=Admin::select('status')->where('id',$id)->first();
    if($getStatus->status==1){
        $status=0;
    }else{
        $status=1;
    }
    Admin::where('id',$id)->update(['status'=>$status]);

    return redirect()->back();

  }
}
