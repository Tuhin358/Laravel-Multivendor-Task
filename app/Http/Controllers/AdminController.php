<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use DB;
use Illuminate\Console\View\Components\Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts=Admin::get();
        return view("admin.index",compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'post'=>'required',

        ]);
        try{
            DB::beginTransaction();
            $post=new Admin();
            $post->post=$request->post;
            $post->save();
            DB::commit();
            // Alert::success("Post insert Done1");
            return back();

        }catch(\Exception $ex){
            DB::rollBack();
            return $ex->getMessage();
        }

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
    public function edit($id)
    {
        $post=Admin::find($id);
        return view('admin.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'post'=>'required',

        ]);
        $post=Admin::find($id);
        $post->post=$request->post;
        $post->save();
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Admin::findOrFail($id)->delete();
         return back();

    }
}
