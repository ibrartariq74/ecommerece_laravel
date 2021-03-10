<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\cart;
use App\Models\Order;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //echo $id;
        $product=product::with('category')->find($id);
        //echo "<pre>";
        //print_r($product);
        return view('frontend.cart.cart',compact('product'));
        //dd($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id ) 
    {   
       $product=product::find($id);
         // caculating total price
       $price=$product->price;
       $quantity=$request->quantity;
       $totalprice=$price*$quantity;
      
            // adding values into cart 
       $cart= new cart();
       $cart->poduct_name=$product->name;
       $cart->quantity=$request->quantity;
       $cart->price=$product->price;
       $cart->total_price=$totalprice;
       $cart->save();


       // adding oder in oder table with user id 
        $userid=Auth::id();
       $order= new Order();
       $order->user_id=$userid;
       $order->product_id=$id;
       $order->save();
           



         // calculating total bill
        $totalbill=cart::sum('total_price');
         
        // recieving final product to show
       $finalproduct=cart::all();
       
        
       
        return view('frontend.cart.bill',compact('finalproduct','totalbill'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        
    }
}
