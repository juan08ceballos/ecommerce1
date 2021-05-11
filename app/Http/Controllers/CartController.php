<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('cart') == false) {
            return redirect()->route('products.index');
        } else {

            $cartProducts = session()->get('cart.products');


            return view('components/cart.index', compact('cartProducts'));
        }
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

        $productSelected = Product::find($request->productId);

        $amount = $request->amount;

        if ($request->session()->has('cart') == false) {
            $request->session()->put('cart', ['products' => []]);
        }
        $cartProducts = session()->get('cart.products');
        // dd($cartProducts[0]['product']->id);
        
        // $ProductIndex = $cartProducts->search(function($item,$key) use ($request) {
        //     return $item['product']->id == Product::id($request->productId)->id;
        // });
        $rep = false;
        $index=0;
        for ($i=0; $i < count($cartProducts); $i++) { 
            if (($cartProducts[$i]['product']->id) == $productSelected->id) {
                $rep = true;
                $index = $i;
                break;
           }
         }
         
        $quantity = $cartProducts[$index]['amount'];
        
        
         

        if (!$rep) {
            $request->session()->push('cart.products', ['product' => $productSelected, 'amount' => $amount]);
        } else {
            $quantity = $quantity ++;
        }
        

        



        return redirect()->route('cart.index');
    }
    public function addOne(Product $product)
    {
       
        return redirect()->route('cart.store', compact('product'));
        $cartProducts = session()->get('cart.products');
        $rep = false;
        $index=0;
        for ($i=0; $i < count($cartProducts); $i++) { 
            if (($cartProducts[$i]['product']->id) == $product->id) {
                $rep = true;
                $index = $i;
                break;
           }
        }
        $quantity = $cartProducts[$index]['amount'];
        if (!$rep) {
            $cartProducts->push('cart.products', ['product' => $product, 'amount' => 1]);
        } else {
            $quantity = $quantity ++;
        }
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
