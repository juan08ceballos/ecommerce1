<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
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

            $total= 0;
            $cartProducts = session()->get('cart.products');
            foreach ($cartProducts as $product) {
                $total = $total + (($product['product']->price - (($product['product']->price*$product['product']->discount)/100)) * $product['amount']);
            }
            


            return view('components/cart.index', compact('cartProducts','total'));
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
    function addProductsToCart ($productSelected,$amount) {

        if(session()->has('cart') == false) {
            session()->put('cart', [ 'products' => [] ]);
        }

        //1. VERIFICAR SI EL PRODUCTO QUE SE ESTA AGREGANDO EN EL MOMENTO YA EXISTE EN EL CARRITO

        $cartProducts = session()->get('cart.products');
        //forma sucia
        //  $indexFoundProduct= -1 ;


        // foreach ($cartProducts as $index => $cartProduct) {
           
        //     if( $cartProduct['product']->id ==  $productSelected -> id) {
        //         $indexFoundProduct = $index;
        //         break;
        //     }

        // }

        //forma limpia

        $indexFoundProduct = collect(session()->get('cart.products')) -> search(function ($cartProduct) use ($productSelected) {

            return $cartProduct['product']->id == $productSelected->id ;
        });

        // print_r($indexFoundProduct);
        // dd($cartProducts);


        if($indexFoundProduct > -1 ) {
        //2.TOMAR DESICION EN CASO POSITIVO
        //2.1 ACTUALIZAR EN EL CARRITO LA CANTIDAD DE PRODUCTOS, SUMANDO LOS QUE YA EXISTEN CON LOS QUE ESTAN AGREGANDO
        
        $cartProducts[$indexFoundProduct]['amount'] += $amount;

        //2.2 REEMPLAZAR NUEVAMENTE TODO EL CARRITO
        session()->put('cart.products',$cartProducts);

        session()->flash('status',"se actualizo cantidad de $productSelected->name en el carrito");

        }else {

                  // EN CASO QUE NO EXISTA EN EL CARRITO
                  //3. SE HACE UN PUSH Y YA ESTA
        session()->push('cart.products', ['product'=> $productSelected, 'amount' => $amount]);   
        session()->flash('status',"se agrego producto $productSelected->name al carrito");
       
        }
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

        if(session()->has('cart') == false) {
            session()->put('cart', [ 'products' => [] ]);
        }

        //1. VERIFICAR SI EL PRODUCTO QUE SE ESTA AGREGANDO EN EL MOMENTO YA EXISTE EN EL CARRITO

        $cartProducts = session()->get('cart.products');
        //forma sucia
        //  $indexFoundProduct= -1 ;


        // foreach ($cartProducts as $index => $cartProduct) {
           
        //     if( $cartProduct['product']->id ==  $productSelected -> id) {
        //         $indexFoundProduct = $index;
        //         break;
        //     }

        // }

        //forma limpia

        $indexFoundProduct = collect(session()->get('cart.products')) -> search(function ($cartProduct) use ($productSelected) {

            return $cartProduct['product']->id == $productSelected->id ;
        });

        // dd($indexFoundProduct);
        // dd($cartProducts);


        if($indexFoundProduct > -1) {
        //2.TOMAR DESICION EN CASO POSITIVO
        //2.1 ACTUALIZAR EN EL CARRITO LA CANTIDAD DE PRODUCTOS, SUMANDO LOS QUE YA EXISTEN CON LOS QUE ESTAN AGREGANDO
        
        $cartProducts[$indexFoundProduct]['amount'] += $amount;

        //2.2 REEMPLAZAR NUEVAMENTE TODO EL CARRITO
        session()->put('cart.products',$cartProducts);

        // session()->flash('status',"se actualizo cantidad de $productSelected->name en el carrito");

        }else {

                  // EN CASO QUE NO EXISTA EN EL CARRITO
                  //3. SE HACE UN PUSH Y YA ESTA
        session()->push('cart.products', ['product'=> $productSelected, 'amount' => $amount]);   
        // session()->flash('status',"se agrego producto $productSelected->name al carrito");
       
        }
        
        return redirect()->route('products.index');

    }

    public function addOne(Product $product)
    {
        $this->addProductsToCart($product,1);
        return back();
    }

    // public function cleancart()
    // {
    //     $cartProducts = session()->get('cart.products');
    //     for ($i=0; $i < count($cartProducts); $i++) { 
            
    //         unset($cartProducts[$i]);
    //     }
    //     session()->put('cart.products',$cartProducts);

    //     $products= Product::all()->take(4);
        
    //     $categories = Category::all();
    //     return view('components/products.index',compact('products','categories',));
    // }

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
        $cartProducts = session()->get('cart.products');
        unset($cartProducts[$id]);
        session()->put('cart.products',$cartProducts);
        
        return back();
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
        
        
    }
}
