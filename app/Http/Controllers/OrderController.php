<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderHasProduct;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
     {
        
        $this -> middleware(['auth'])->only(['index']);

     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        {
            if (session()->has('cart') == false) {
                return redirect()->route('products.index');
            } else {
    
                $total= 0;
            $cartProducts = session()->get('cart.products');
            foreach ($cartProducts as $product) {
                $total = $total + (($product['product']->price - (($product['product']->price*$product['product']->discount)/100)) * $product['amount']);
            }
                
    
    
                return view('components/order.index', compact('cartProducts','total'));
            }
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
        
        $neworder = new Order();
        $neworder->payment = $request->payment;
        $neworder->final_price = $request->finalPrice;
        $neworder->user_id = auth()->user()->id;
        $neworder->save();

        foreach ($request->productId as $key => $prod) {
            $newOrderHasProducts = new OrderHasProduct();
            $newOrderHasProducts->orders_id = $neworder->id;
            $newOrderHasProducts->products_id = $prod;
            $newOrderHasProducts->amount = $request->quantity[$key];
            $newOrderHasProducts->save();
        }
        $cartProducts = session()->get('cart.products');
        foreach ($cartProducts as $key => $producCart) {
            unset($cartProducts[$key]);
        }
        
        
        session()->put('cart.products',$cartProducts);

        return redirect()->route('products.index');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
