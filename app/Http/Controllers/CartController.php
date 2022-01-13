<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Models\CartProduct; 
// use App\Models\CartStorage; 

class CartController extends Controller
{
    public function cartList()
    {
        $userId = auth()->id();
        \Cart::session($userId); 
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {

        // $userId = auth()->id(); 
 
        if(auth()->id()){

            \Cart::session(auth()->id()); 

            \Cart::add([
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->main_image,
               
                )
            ]);
    
            // $cartCollection = \Cart::getContent();
            

            // $cartStorage = new CartStorage(); 
    
            // $cartStorage->cart_data = $cartCollection->toJson(); 
            // $cartStorage->user_id = auth()->id(); 

            $cartProduct = new CartProduct(); 
            $cartProduct->product_id = $request->id; 
            $cartProduct->name = $request->name; 
            $cartProduct->price = $request->price; 
            $cartProduct->quantity = $request->quantity; 
            $cartProduct->image = $request->main_image; 
            $cartProduct->user_id = auth()->id(); 

            $cartProduct->save();

    
        }

        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->back();
    }

    public function updateCart(Request $request)
    {
        if(auth()->id()){

            \Cart::session(auth()->id()); 
            $userId = auth()->id(); 

            \Cart::update(
                $request->id,
                [
                    'quantity' => [
                        'relative' => false,
                        'value' => $request->quantity
                    ],
                ]
            );
            $productQuantity = $request->quantity; 
            $productSelected = $request->id; 
            DB::statement("UPDATE cart_products SET quantity = $productQuantity WHERE user_id = $userId AND product_id = $productSelected");
    
            if($request->quantity == 0)
            {
                \Cart::remove($request->id);
                $userId = auth()->id(); 
                $productSelected = $request->id; 
                DB::statement("DELETE FROM cart_products WHERE user_id = $userId AND product_id = $productSelected");
            }
    
        }

       
        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        if(auth()->id()){

            \Cart::session(auth()->id()); 
            \Cart::remove($request->id);
            $userId = auth()->id(); 
            $productSelected = $request->id; 
            DB::statement("DELETE FROM cart_products WHERE user_id = $userId AND product_id = $productSelected");


        
        }

        
        session()->flash('success', 'Item Cart Remove Successfully !');
        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        if(auth()->id()){

            $userId = auth()->id();
            \Cart::session($userId); 
            \Cart::clear();
            DB::statement("DELETE FROM cart_products WHERE user_id = $userId"); 
        }
        

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    public function checkout()
    {
        $userId = auth()->id();
        \Cart::session($userId);
        $cartItems = \Cart::getContent();

        return view('checkout', compact('cartItems'));
    }
}