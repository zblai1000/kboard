<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\CartProduct; 


use DB;

class HomeController extends Controller
{
    public function home()
    {
        $products = DB::select('SELECT * FROM products');

 

        if(auth()->id()){

            $userId = auth()->id(); 
            \Cart::session($userId); 
            $cartItems = \Cart::getContent();
         

            $cartProducts = DB::select("SELECT * FROM cart_products WHERE user_id = $userId"); 

            if(\Cart::getTotal() == 0){

                foreach($cartProducts as $cartProduct){

                    \Cart::add(array(
                        'id' => $cartProduct->product_id,
                        'name' => $cartProduct->name,
                        'price' => $cartProduct->price,
                        'quantity' => $cartProduct->quantity,
                        'attributes' => array(
                            'image' => $cartProduct->image,
                        )
                    ));
                }
            }

            return view('home', compact('products'), compact('cartItems'))->with('userId', auth()->id());
        }
      
        return view('home', compact('products'))->with('userId', auth()->id());

       
    }

    public function k100()
    {

        $products = DB::select('SELECT * FROM products');

 

        if(auth()->id()){

            $userId = auth()->id(); 
            \Cart::session($userId); 
            $cartItems = \Cart::getContent();
         

            $cartProducts = DB::select("SELECT * FROM cart_products WHERE user_id = $userId"); 

            if(\Cart::getTotal() == 0){

                foreach($cartProducts as $cartProduct){

                    \Cart::add(array(
                        'id' => $cartProduct->product_id,
                        'name' => $cartProduct->name,
                        'price' => $cartProduct->price,
                        'quantity' => $cartProduct->quantity,
                        'attributes' => array(
                            'image' => $cartProduct->image,
                        )
                    ));
                }
            }

            return view('k100', compact('products'), compact('cartItems'))->with('userId', auth()->id());
        }
      
        return view('k100', compact('products'))->with('userId', auth()->id());

    }

    public function k96()
    {

        $products = DB::select('SELECT * FROM products');

 

        if(auth()->id()){

            $userId = auth()->id(); 
            \Cart::session($userId); 
            $cartItems = \Cart::getContent();
         

            $cartProducts = DB::select("SELECT * FROM cart_products WHERE user_id = $userId"); 

            if(\Cart::getTotal() == 0){

                foreach($cartProducts as $cartProduct){

                    \Cart::add(array(
                        'id' => $cartProduct->product_id,
                        'name' => $cartProduct->name,
                        'price' => $cartProduct->price,
                        'quantity' => $cartProduct->quantity,
                        'attributes' => array(
                            'image' => $cartProduct->image,
                        )
                    ));
                }
            }

            return view('k96', compact('products'), compact('cartItems'))->with('userId', auth()->id());
        }
      
        return view('k96', compact('products'))->with('userId', auth()->id());

    }
    public function k80()
    {

        $products = DB::select('SELECT * FROM products');

 

        if(auth()->id()){

            $userId = auth()->id(); 
            \Cart::session($userId); 
            $cartItems = \Cart::getContent();
         

            $cartProducts = DB::select("SELECT * FROM cart_products WHERE user_id = $userId"); 

            if(\Cart::getTotal() == 0){

                foreach($cartProducts as $cartProduct){

                    \Cart::add(array(
                        'id' => $cartProduct->product_id,
                        'name' => $cartProduct->name,
                        'price' => $cartProduct->price,
                        'quantity' => $cartProduct->quantity,
                        'attributes' => array(
                            'image' => $cartProduct->image,
                        )
                    ));
                }
            }

            return view('k80', compact('products'), compact('cartItems'))->with('userId', auth()->id());
        }
      
        return view('k80', compact('products'))->with('userId', auth()->id());

    }

    public function k75()
    {

        $products = DB::select('SELECT * FROM products');

 

        if(auth()->id()){

            $userId = auth()->id(); 
            \Cart::session($userId); 
            $cartItems = \Cart::getContent();
         

            $cartProducts = DB::select("SELECT * FROM cart_products WHERE user_id = $userId"); 

            if(\Cart::getTotal() == 0){

                foreach($cartProducts as $cartProduct){

                    \Cart::add(array(
                        'id' => $cartProduct->product_id,
                        'name' => $cartProduct->name,
                        'price' => $cartProduct->price,
                        'quantity' => $cartProduct->quantity,
                        'attributes' => array(
                            'image' => $cartProduct->image,
                        )
                    ));
                }
            }

            return view('k75', compact('products'), compact('cartItems'))->with('userId', auth()->id());
        }
      
        return view('k75', compact('products'))->with('userId', auth()->id());

    }

    public function k60()
    {

        $products = DB::select('SELECT * FROM products');

 

        if(auth()->id()){

            $userId = auth()->id(); 
            \Cart::session($userId); 
            $cartItems = \Cart::getContent();
         

            $cartProducts = DB::select("SELECT * FROM cart_products WHERE user_id = $userId"); 

            if(\Cart::getTotal() == 0){

                foreach($cartProducts as $cartProduct){

                    \Cart::add(array(
                        'id' => $cartProduct->product_id,
                        'name' => $cartProduct->name,
                        'price' => $cartProduct->price,
                        'quantity' => $cartProduct->quantity,
                        'attributes' => array(
                            'image' => $cartProduct->image,
                        )
                    ));
                }
            }

            return view('k60', compact('products'), compact('cartItems'))->with('userId', auth()->id());
        }
      
        return view('k60', compact('products'))->with('userId', auth()->id());

    }

    public function viewProduct(Request $request, Product $product)
    {

        $products = DB::select('SELECT * FROM products');

        if(auth()->id()){

            $userId = auth()->id(); 
            \Cart::session($userId); 
            $cartItems = \Cart::getContent();

            $inStock = null; 

            if($product->stock > 0){

                $inSotck = "In stock";
            }
            else{

                $inStock = "Out of stock"; 
            }
            // return view('header', compact('product'), compact('cartItems'))->with('userId', auth()->id());
            return view('viewProduct', compact('product'), compact('cartItems'))->with('userId', auth()->id());
        }

       

        return view('viewProduct', compact('product'))->with('userId', auth()->id());
    }

    public function blog1()
    {

        $products = DB::select('SELECT * FROM products');

 

        if(auth()->id()){

            $userId = auth()->id(); 
            \Cart::session($userId); 
            $cartItems = \Cart::getContent();
         

            $cartProducts = DB::select("SELECT * FROM cart_products WHERE user_id = $userId"); 

            if(\Cart::getTotal() == 0){

                foreach($cartProducts as $cartProduct){

                    \Cart::add(array(
                        'id' => $cartProduct->product_id,
                        'name' => $cartProduct->name,
                        'price' => $cartProduct->price,
                        'quantity' => $cartProduct->quantity,
                        'attributes' => array(
                            'image' => $cartProduct->image,
                        )
                    ));
                }
            }

            return view('blog1', compact('products'), compact('cartItems'))->with('userId', auth()->id());
        }
      
        return view('blog1', compact('products'))->with('userId', auth()->id());

    }

    public function blog2()
    {

        $products = DB::select('SELECT * FROM products');

 

        if(auth()->id()){

            $userId = auth()->id(); 
            \Cart::session($userId); 
            $cartItems = \Cart::getContent();
         

            $cartProducts = DB::select("SELECT * FROM cart_products WHERE user_id = $userId"); 

            if(\Cart::getTotal() == 0){

                foreach($cartProducts as $cartProduct){

                    \Cart::add(array(
                        'id' => $cartProduct->product_id,
                        'name' => $cartProduct->name,
                        'price' => $cartProduct->price,
                        'quantity' => $cartProduct->quantity,
                        'attributes' => array(
                            'image' => $cartProduct->image,
                        )
                    ));
                }
            }

            return view('blog2', compact('products'), compact('cartItems'))->with('userId', auth()->id());
        }
      
        return view('blog2', compact('products'))->with('userId', auth()->id());

    }

    public function blog3()
    {

        $products = DB::select('SELECT * FROM products');

 

        if(auth()->id()){

            $userId = auth()->id(); 
            \Cart::session($userId); 
            $cartItems = \Cart::getContent();
         

            $cartProducts = DB::select("SELECT * FROM cart_products WHERE user_id = $userId"); 

            if(\Cart::getTotal() == 0){

                foreach($cartProducts as $cartProduct){

                    \Cart::add(array(
                        'id' => $cartProduct->product_id,
                        'name' => $cartProduct->name,
                        'price' => $cartProduct->price,
                        'quantity' => $cartProduct->quantity,
                        'attributes' => array(
                            'image' => $cartProduct->image,
                        )
                    ));
                }
            }

            return view('blog3', compact('products'), compact('cartItems'))->with('userId', auth()->id());
        }
      
        return view('blog3', compact('products'))->with('userId', auth()->id());

    }
}
