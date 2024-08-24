<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::latest()->get();
        return view('admin.category.index',compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    dd($request->all());
        $request->validate([
        'category' => ['required','unique:categories,name'],
        'category_image'=> ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ],[
            'category.required' => 'Category Name is Required!',
            'category.unique' => 'Category Name is Already Used!',
        ]);

        $CategoryImage=$request->category_image;
        if($request->file('category_image')){
            $CategoryImage=storage::putFile('Category',$request->file('category_image'));
        }else{
            $CategoryImage='';
        }
      
        Category::create([
            'name'=>$request->category,
            'slug'=>Str::slug($request->category),
            'image'=>$CategoryImage,
           
        ]);

        Toastr::success('Category Add successfully');
        return redirect()->route('admin.category.index');

        
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
        $category=Category::findOrFail($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $category=Category::findOrFail($id);
    
        // photo unlink and update 
        if($request->hasFile('category_image')){
            if($category->image != ''){
                unlink(public_path('storage/'.$category->image));
            }
            if($category->image){
                Storage::delete('Category' . $category->image);
            }
            $newImage=$request->file('category_image')->store('category_image');
            $category->image = $newImage;
        }else{
            $newImage=$category->image;
        }
        // photo unlink and update 

        $category->findOrFail($id)->update([
            'name'=>$request->category,
            'slug'=>Str::slug($request->category),
            'image'=>$newImage,
        ]);

        Toastr::success('Category Update successfully');
        return redirect()->route('admin.category.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::findOrFail($id)->delete();
         Toastr::success('Category Delete successfully');
        return redirect()->route('admin.category.index');
    }
}
