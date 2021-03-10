<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // dd('$request');
        $categorys=Category::all();
        $products = product::with('Category')->get(); 

        return view('home',compact('categorys','products'  ) );
    }
    public function filter($min,$max)
    {
       
        
        
        $categorys=Category::all();
        $products = product::whereBetween('price', [$min, $max])->get(); 
       
      

        return view('frontend.filter',compact('categorys','products'  ) );
    }
}
