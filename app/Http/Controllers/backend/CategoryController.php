<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys=Category::all();
       return view ('backend.category.index',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'name' => 'required',
            'description' => 'required',
            'image'=>'required|image ',
        ]);

        $category=new Category();

        $category->name=$request->name;
        $category->description=$request->description;
        if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            echo 'File Extension: '.$file->getClientOriginalExtension();
            echo 'File Real Path: '.$file->getRealPath();
            echo '<br>';
            echo 'File Size: '.$file->getSize();
            echo '<br>';
            echo 'File Mime Type: '.$file->getMimeType();
         
            //Move Uploaded File
            $destinationPath = 'category';
            $file->move($destinationPath,$file->getClientOriginalName());
            $category->image=$file->getClientOriginalName();
           
        }
        else{
            return $request;
            $product->image="";
        }
       
      $category->save();

      return redirect(route('category.index'))->with('success', 'category added updated!');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //dd($category);
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            
           
        ]);
        $category->name=$request->name;
       $category->description=$request->description;
       if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            echo 'File Extension: '.$file->getClientOriginalExtension();
            echo 'File Real Path: '.$file->getRealPath();
            echo '<br>';
            echo 'File Size: '.$file->getSize();
            echo '<br>';
            echo 'File Mime Type: '.$file->getMimeType();
         
            //Move Uploaded File
            $destinationPath = 'category';
            $file->move($destinationPath,$file->getClientOriginalName());
            $category->image=$file->getClientOriginalName();
           
        }
        else{
            return $request;
            $products->image="";
        }
      
       $category->save();
       return redirect(route('category.index'))->with('success', 'category imformation updated!');





       $products->category_id=$request->category;
        $products->name=$request->name;
        $products->price=$request->price;
        $products->description=$request->description;
        if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            echo 'File Extension: '.$file->getClientOriginalExtension();
            echo 'File Real Path: '.$file->getRealPath();
            echo '<br>';
            echo 'File Size: '.$file->getSize();
            echo '<br>';
            echo 'File Mime Type: '.$file->getMimeType();
         
            //Move Uploaded File
            $destinationPath = 'product';
            $file->move($destinationPath,$file->getClientOriginalName());
            $products->image=$file->getClientOriginalName();
           
        }
        else{
            return $request;
            $products->image="";
        }
       
      $products->save();
       return redirect(route('products.index'))->with('success', 'product added updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('category.index'))->with('success', 'category  deleted!');
    }
}
