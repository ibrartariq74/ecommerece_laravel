<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\Stock;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Category::all();
        return view('backend.product.addproduct',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { //dd('pp');
        $products = product::with('Category')->get(); 
      
       
        return view ('backend.product.index',compact('products')  );
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
            'category'=> 'required',
            'name' => 'required',
            'description' => 'required',
            'price'=> 'required',
            'image'=>'required|image ',
        ]);
        
        $product=new product();

        $product->category_id=$request->category;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
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
            $product->image=$file->getClientOriginalName();
           
        }
        else{
            echo '<script language="javascript">alert("juas");</script>';
            dd("must select image");
            return $request;
            $product->image="";
            echo "<script> alert('must select image') </script> ";

        }
       
      $product->save();

      $pro=product::all()->last();
      $lastid=$pro->id;
      $stock=new stock();
      $stock->product_id=$lastid;
      $stock->stock=0;
      $stock->save();
      //
      return redirect(route('products.create'))->with('success', 'product added updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
      
        $id=$product->id;
        $products = product::with('category')->find($id);
        $category=category::all();
        
        return view('backend.product.edit',compact('product','category','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
       // dd($request->all());
        $id=$product->id;
        $products=Product::find($id);

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
            echo '<script language="javascript">alert("must select image");</script>';
           // dd("must select image");
            return redirect()->back();
            $products->image="";
        }
       
      $products->save();
       return redirect(route('products.create'))->with('success', 'product added updated!');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {   $id=$product->id;
        $stock =new Stock();
        $stock=Stock::where('product_id',$id)->delete();
        
    
        $product->delete();
        
        
       
        return redirect(route('products.create'))->with('success', 'product  deleted!');
    }
}
