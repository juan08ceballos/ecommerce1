<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\View;
use Illuminate\Http\Request;

class MoreController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $products)
    {
        $products = Product::all();
        $categories= Category::all();
        
        return view('components/more.index',compact('products','categories'));
        
        
        
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
        $categories= Category::all();
        $products = Product::whereBetween('price',[$request->min, $request->max])->get();
        
        return view('components/more.index',compact('products','categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories= Category::all();
        $consulta = Category::with('products')->find($id);
        $products = $consulta->products;
        
        return view('components/more.index',compact('products','categories'));
    }

    public function filterStar($calification)
    {
        $total = 0;
        $categories = Category::all();
        $product = Product::join('views','views.product_id','=','products.id')->where('calification',$calification)->get();
        // dd($product[1]->product_id);
        // foreach ($product as $key => $prod) {
            
             
            
        // }
        
        $products = $product;
        
        return view('components/more.index',compact('products','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
