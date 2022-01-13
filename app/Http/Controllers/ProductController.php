<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function index()
    {

        $products = DB::select('SELECT id, product_name, product_type, 
                            size, connectivity, price, main_image, 
                            stock,
                            created_at, updated_at FROM products');
        return view('productDashboard', compact('products'));
    }

    public function addProduct()
    {
    	return view('addProduct');
    }

    public function editProduct(Product $product)
    {


        // $products = DB::select('SELECT id, product_name, product_type, 
        //                     description, size, connectivity,
        //                     stock, price,
        //                     main_image, sub_image_1, sub_image_2,
        //                     sub_image_3, sub_image_4, sub_image_5
        //                     FROM products');
        $products = DB::select('SELECT *
                            FROM products');                  
        return view('editProduct', compact('product'));         	
    }

    public function updateProduct(Request $request, Product $product)
    {

        if(isset($_POST['delete'])) {
    		$product->delete();
    		return redirect('/productDashboard');
    	}

        $this->validate($request, [
            'product_name' => 'required',
            'product_type' => 'required',
            'description' => 'required',
            'size' => 'required',
            'connectivity' => 'required',
            // 'switch' => 'required',
            'stock' => 'required',
            'price' => 'required',

            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'tumbnail_main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'large_main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',

            'sub_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'tumbnail_sub_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'large_sub_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',

            'sub_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'tumbnail_sub_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'large_sub_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',

            'sub_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'tumbnail_sub_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'large_sub_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',

            'sub_image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'tumbnail_sub_image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'large_sub_image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',

            'sub_image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'tumbnail_sub_image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'large_sub_image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
        ]);

        $product->product_name = $request->product_name;
        $product->product_type = $request->product_type;
        $product->description = $request->description;
        $product->size = $request->size;
        $product->connectivity = $request->connectivity;
        // $product->switch = $request->switch;
        $product->stock = $request->stock;
        $product->price = $request->price;


        if($request->hasFile('main_image')){
            
            $product->main_image = 'main_image'.time().'.'.$request->main_image->extension();  
            $request->main_image->move(public_path('uploads/products'), $product->main_image);
        }
        if($request->hasFile('tumbnail_main_image')){
            
            $product->tumbnail_main_image = 'tumbnail_main_image'.time().'.'.$request->tumbnail_main_image->extension();  
            $request->tumbnail_main_image->move(public_path('uploads/products'), $product->tumbnail_main_image);
            $product->display_1 = 'flex';
        }
        if($request->hasFile('large_main_image')){
            
            $product->large_main_image = 'large_main_image'.time().'.'.$request->large_main_image->extension();  
            $request->large_main_image->move(public_path('uploads/products'), $product->large_main_image);
            $product->display_1 = 'flex';
        }

        if($request->hasFile('sub_image_1')){
            
            $product->sub_image_1 = 'sub_image_1'.time().'.'.$request->sub_image_1->extension();  
            $request->sub_image_1->move(public_path('uploads/products'), $product->sub_image_1);
            $product->display_1 = 'flex';
        }
        if($request->hasFile('tumbnail_sub_image_1')){
            
            $product->tumbnail_sub_image_1 = 'tumbnail_sub_image_1'.time().'.'.$request->tumbnail_sub_image_1->extension();  
            $request->tumbnail_sub_image_1->move(public_path('uploads/products'), $product->tumbnail_sub_image_1);
            $product->tumbnail_display_1 = 'flex';
        }
        if($request->hasFile('large_sub_image_1')){
            
            $product->large_sub_image_1 = 'large_sub_image_1'.time().'.'.$request->large_sub_image_1->extension();  
            $request->large_sub_image_1->move(public_path('uploads/products'), $product->large_sub_image_1);
            $product->large_display_1 = 'flex';
        }

        if($request->hasFile('sub_image_2')){
            
            $product->sub_image_2 = 'sub_image_2'.time().'.'.$request->sub_image_2->extension();  
            $request->sub_image_2->move(public_path('uploads/products'), $product->sub_image_2);
            $product->display_2 = 'flex';
        }
        if($request->hasFile('tumbnail_sub_image_2')){
            
            $product->tumbnail_sub_image_2 = 'tumbnail_sub_image_2'.time().'.'.$request->tumbnail_sub_image_2->extension();  
            $request->tumbnail_sub_image_2->move(public_path('uploads/products'), $product->tumbnail_sub_image_2);
            $product->tumbnail_display_2 = 'flex';
        }
        if($request->hasFile('large_sub_image_2')){
            
            $product->large_sub_image_2 = 'large_sub_image_2'.time().'.'.$request->large_sub_image_2->extension();  
            $request->large_sub_image_2->move(public_path('uploads/products'), $product->large_sub_image_2);
            $product->large_display_2 = 'flex';
        }

        if($request->hasFile('sub_image_3')){
            
            $product->sub_image_3 = 'sub_image_3'.time().'.'.$request->sub_image_3->extension();  
            $request->sub_image_3->move(public_path('uploads/products'), $product->sub_image_3);
            $product->display_3 = 'flex';
        }
        if($request->hasFile('tumbnail_sub_image_3')){
            
            $product->tumbnail_sub_image_3 = 'tumbnail_sub_image_3'.time().'.'.$request->tumbnail_sub_image_3->extension();  
            $request->tumbnail_sub_image_3->move(public_path('uploads/products'), $product->tumbnail_sub_image_3);
            $product->tumbnail_display_3 = 'flex';
        }
        if($request->hasFile('large_sub_image_3')){
            
            $product->large_sub_image_3 = 'large_sub_image_3'.time().'.'.$request->large_sub_image_3->extension();  
            $request->large_sub_image_3->move(public_path('uploads/products'), $product->large_sub_image_3);
            $product->large_display_3 = 'flex';
        }

        if($request->hasFile('sub_image_4')){
            
            $product->sub_image_4 = 'sub_image_4'.time().'.'.$request->sub_image_4->extension();  
            $request->sub_image_4->move(public_path('uploads/products'), $product->sub_image_4);
            $product->display_4 = 'flex';
        }
        if($request->hasFile('tumbnail_sub_image_4')){
            
            $product->tumbnail_sub_image_4 = 'tumbnail_sub_image_4'.time().'.'.$request->tumbnail_sub_image_4->extension();  
            $request->tumbnail_sub_image_4->move(public_path('uploads/products'), $product->tumbnail_sub_image_4);
            $product->tumbnail_display_4 = 'flex';
        }
        if($request->hasFile('large_sub_image_4')){
            
            $product->large_sub_image_4 = 'large_sub_image_4'.time().'.'.$request->large_sub_image_4->extension();  
            $request->large_sub_image_4->move(public_path('uploads/products'), $product->large_sub_image_4);
            $product->large_display_4 = 'flex';
        }

        if($request->hasFile('sub_image_5')){
            
            $product->sub_image_5 = 'sub_image_5'.time().'.'.$request->sub_image_5->extension();  
            $request->sub_image_5->move(public_path('uploads/products'), $product->sub_image_5);
            $product->display_5 = 'flex';
        }
        if($request->hasFile('tumbnail_sub_image_5')){
            
            $product->tumbnail_sub_image_5 = 'tumbnail_sub_image_5'.time().'.'.$request->tumbnail_sub_image_5->extension();  
            $request->tumbnail_sub_image_5->move(public_path('uploads/products'), $product->tumbnail_sub_image_5);
            $product->tumbnail_display_5 = 'flex';
        }
        if($request->hasFile('large_sub_image_5')){
            
            $product->large_sub_image_5 = 'large_sub_image_5'.time().'.'.$request->large_sub_image_5->extension();  
            $request->large_sub_image_5->move(public_path('uploads/products'), $product->large_sub_image_5);
            $product->large_display_5 = 'flex';
        }

        if(isset($_POST['forget1'])) {

    		$product->update(['sub_image_1' => null]); 
            $product->display_1 = 'none';
            $product->tumbnail_display_1 = 'none';
            $product->large_display_1 = 'none';
            return view('editProduct', compact('product'));
    	}
        else if(isset($_POST['forget2'])) {

    		$product->update(['sub_image_2' => null]); 
            $product->display_2 = 'none';
            $product->tumbnail_display_2 = 'none';
            $product->large_display_2 = 'none';
            return view('editProduct', compact('product'));
    	}
        else if(isset($_POST['forget3'])) {

    		$product->update(['sub_image_3' => null]); 
            $product->display_3 = 'none';
            $product->tumbnail_display_3 = 'none';
            $product->large_display_3 = 'none';
            return view('editProduct', compact('product'));
    	}
        else if(isset($_POST['forget4'])) {

    		$product->update(['sub_image_4' => null]); 
            $product->display_4 = 'none';
            $product->tumbnail_display_4 = 'none';
            $product->large_display_4 = 'none';
            return view('editProduct', compact('product'));
    	}
        else if(isset($_POST['forget5'])) {

    		$product->update(['sub_image_5' => null]); 
            $product->display_5 = 'none';
            $product->tumbnail_display_5 = 'none';
            $product->large_display_5 = 'none';
            return view('editProduct', compact('product'));
        }
 

        $product->save();
        return redirect('/productDashboard'); 
     
    }

    public function createProduct(Request $request)
    {

        if(isset($_POST['delete'])) {
    		$product->delete();
    		return redirect('/productDashboard');
    	}

        $this->validate($request, [
            'product_name' => 'required',
            'product_type' => 'required',
            'description' => 'required',
            'size' => 'required',
            'connectivity' => 'required',
            // 'switch' => 'required',
            'stock' => 'required',
            'price' => 'required',

            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'tumbnail_main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'large_main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',

            'sub_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'display_1' => 'nullable',
            'tumbnail_sub_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'tumbnail_display_1' => 'nullable',
            'large_sub_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'large_display_1' => 'nullable',

            'sub_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'display_2' => 'nullable',
            'tumbnail_sub_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'tumbnail_display_2' => 'nullable',
            'large_sub_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'large_display_2' => 'nullable',

            'sub_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'display_3' => 'nullable',
            'tumbnail_sub_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'tumbnail_display_3' => 'nullable',
            'large_sub_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'large_display_3' => 'nullable',

            'sub_image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'display_4' => 'nullable',
            'tumbnail_sub_image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'tumbnail_display_4' => 'nullable',
            'large_sub_image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'large_display_4' => 'nullable',

            'sub_image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'display_5' => 'nullable',
            'tumbnail_sub_image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'tumbnail_display_5' => 'nullable',
            'large_sub_image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000', 
            'large_display_5' => 'nullable',
        ]);
    	$product = new Product();
        $product->product_name = $request->product_name;
        $product->product_type = $request->product_type;
        $product->description = $request->description;
        $product->size = $request->size;
        $product->connectivity = $request->connectivity;
        // $product->switch = $request->switch;
        $product->stock = $request->stock;
        $product->price = $request->price;

        $product->main_image = 'main_image'.time().'.'.$request->main_image->extension();  
        $request->main_image->move(public_path('uploads/products'), $product->main_image);

        $product->tumbnail_main_image = 'tumbnail_main_image'.time().'.'.$request->tumbnail_main_image->extension();  
        $request->tumbnail_main_image->move(public_path('uploads/products'), $product->tumbnail_main_image);

        $product->large_main_image = 'large_main_image'.time().'.'.$request->large_main_image->extension();  
        $request->large_main_image->move(public_path('uploads/products'), $product->large_main_image);

        if($request->hasFile('sub_image_1')){
            
            $product->sub_image_1 = 'sub_image_1'.time().'.'.$request->sub_image_1->extension();  
            $request->sub_image_1->move(public_path('uploads/products'), $product->sub_image_1);
            $product->display_1 = 'flex';
        }
        if($request->hasFile('tumbnail_sub_image_1')){
            
            $product->tumbnail_sub_image_1 = 'tumbnail_sub_image_1'.time().'.'.$request->tumbnail_sub_image_1->extension();  
            $request->tumbnail_sub_image_1->move(public_path('uploads/products'), $product->tumbnail_sub_image_1);
            $product->tumbnail_display_1 = 'flex';
        }
        if($request->hasFile('large_sub_image_1')){
            
            $product->large_sub_image_1 = 'large_sub_image_1'.time().'.'.$request->large_sub_image_1->extension();  
            $request->large_sub_image_1->move(public_path('uploads/products'), $product->large_sub_image_1);
            $product->large_display_1 = 'flex';
        }

        if($request->hasFile('sub_image_2')){
            
            $product->sub_image_2 = 'sub_image_2'.time().'.'.$request->sub_image_2->extension();  
            $request->sub_image_2->move(public_path('uploads/products'), $product->sub_image_2);
            $product->display_2 = 'flex';
        }
        if($request->hasFile('tumbnail_sub_image_2')){
            
            $product->tumbnail_sub_image_2 = 'tumbnail_sub_image_2'.time().'.'.$request->tumbnail_sub_image_2->extension();  
            $request->tumbnail_sub_image_2->move(public_path('uploads/products'), $product->tumbnail_sub_image_2);
            $product->tumbnail_display_2 = 'flex';
        }
        if($request->hasFile('large_sub_image_2')){
            
            $product->large_sub_image_2 = 'large_sub_image_2'.time().'.'.$request->large_sub_image_2->extension();  
            $request->large_sub_image_2->move(public_path('uploads/products'), $product->large_sub_image_2);
            $product->large_display_2 = 'flex';
        }

        if($request->hasFile('sub_image_3')){
            
            $product->sub_image_3 = 'sub_image_3'.time().'.'.$request->sub_image_3->extension();  
            $request->sub_image_3->move(public_path('uploads/products'), $product->sub_image_3);
            $product->display_3 = 'flex';
        }
        if($request->hasFile('tumbnail_sub_image_3')){
            
            $product->tumbnail_sub_image_3 = 'tumbnail_sub_image_3'.time().'.'.$request->tumbnail_sub_image_3->extension();  
            $request->tumbnail_sub_image_3->move(public_path('uploads/products'), $product->tumbnail_sub_image_3);
            $product->tumbnail_display_3 = 'flex';
        }
        if($request->hasFile('large_sub_image_3')){
            
            $product->large_sub_image_3 = 'large_sub_image_3'.time().'.'.$request->large_sub_image_3->extension();  
            $request->large_sub_image_3->move(public_path('uploads/products'), $product->large_sub_image_3);
            $product->large_display_3 = 'flex';
        }

        if($request->hasFile('sub_image_4')){
            
            $product->sub_image_4 = 'sub_image_4'.time().'.'.$request->sub_image_4->extension();  
            $request->sub_image_4->move(public_path('uploads/products'), $product->sub_image_4);
            $product->display_4 = 'flex';
        }
        if($request->hasFile('tumbnail_sub_image_4')){
            
            $product->tumbnail_sub_image_4 = 'tumbnail_sub_image_4'.time().'.'.$request->tumbnail_sub_image_4->extension();  
            $request->tumbnail_sub_image_4->move(public_path('uploads/products'), $product->tumbnail_sub_image_4);
            $product->tumbnail_display_4 = 'flex';
        }
        if($request->hasFile('large_sub_image_4')){
            
            $product->large_sub_image_4 = 'large_sub_image_4'.time().'.'.$request->large_sub_image_4->extension();  
            $request->large_sub_image_4->move(public_path('uploads/products'), $product->large_sub_image_4);
            $product->large_display_4 = 'flex';
        }

        if($request->hasFile('sub_image_5')){
            
            $product->sub_image_5 = 'sub_image_5'.time().'.'.$request->sub_image_5->extension();  
            $request->sub_image_5->move(public_path('uploads/products'), $product->sub_image_5);
            $product->display_5 = 'flex';
        }
        if($request->hasFile('tumbnail_sub_image_5')){
            
            $product->tumbnail_sub_image_5 = 'tumbnail_sub_image_5'.time().'.'.$request->tumbnail_sub_image_5->extension();  
            $request->tumbnail_sub_image_5->move(public_path('uploads/products'), $product->tumbnail_sub_image_5);
            $product->tumbnail_display_5 = 'flex';
        }
        if($request->hasFile('large_sub_image_5')){
            
            $product->large_sub_image_5 = 'large_sub_image_5'.time().'.'.$request->large_sub_image_5->extension();  
            $request->large_sub_image_5->move(public_path('uploads/products'), $product->large_sub_image_5);
            $product->large_display_5 = 'flex';
        }


        

    	$product->save();
    	return redirect('/productDashboard'); 
    }
}

