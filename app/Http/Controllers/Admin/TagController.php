<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags=Tag::latest()->get();
        return view('admin.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tag_name'=>'required',
        ],[
            'tag_name'=>'Tag Name Is Required!',
        ]);
        
        Tag::create([
            'name'=>$request->tag_name,
            'slug'=>Str::slug($request->tag_name)
        ]);
        Toastr::success('Tag Added Successfully','success');

        return redirect()->route('admin.tag.index');
        
       
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
        $tag=Tag::findOrFail($id);
        return view('admin.tag.edit',compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        Tag::findOrFail($id)->update([
            'name'=>$request->tag_name,
            'slug'=>Str::slug($request->tag_name),
        ]);
        Toastr::success('Tag Updated Successfully','success');

        return redirect()->route('admin.tag.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tag::findOrFail($id)->delete();
     
        Toastr::error('Tag Delete Successfully','success');

        return redirect()->route('admin.tag.index');
    }
}
