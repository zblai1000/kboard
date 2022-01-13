<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\K100;
use DB;

class K100Controller extends Controller
{
    public function index()
    {

        $products = DB::select('SELECT id, product_name, product_type, 
                            size, connectivity, price, main_image, 
                            switch, stock,
                            created_at, updated_at FROM k100s');
        return view('k100Dashboard', compact('k100s'));
    }

    public function addK100()
    {
    	return view('addK100');
    }

    public function editK100(K100 $product)
    {


        $products = DB::select('SELECT id, product_name, product_type, 
                            description, size, connectivity,
                            switch, stock, price,
                            main_image, sub_image_1, sub_image_2,
                            sub_image_3, sub_image_4, sub_image_5
                            FROM k100s');
        return view('editK100', compact('k100'));         	
    }

    public function updateK100(Request $request, K100 $product)
    {

        if(isset($_POST['delete'])) {
    		$product->delete();
    		return redirect('/k100Dashboard');
    	}

        $this->validate($request, [
            'product_name' => 'required',
            'product_type' => 'required',
            'description' => 'required',
            'size' => 'required',
            'connectivity' => 'required',
            'switch' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'sub_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'sub_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'sub_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'sub_image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'sub_image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
        ]);

        $product->product_name = $request->product_name;
        $product->product_type = $request->product_type;
        $product->description = $request->description;
        $product->size = $request->size;
        $product->connectivity = $request->connectivity;
        $product->switch = $request->switch;
        $product->stock = $request->stock;
        $product->price = $request->price;


        if($request->hasFile('main_image')){
            
            $product->main_image = 'small'.time().'.'.$request->main_image->extension();  
            $request->main_image->move(public_path('uploads/k100s'), $product->main_image);
        }
        if($request->hasFile('sub_image_1')){
            
            $product->sub_image_1 = 'small'.time().'.'.$request->sub_image_1->extension();  
            $request->sub_image_1->move(public_path('uploads/k100s'), $product->sub_image_1);
            $product->display_1 = 'flex';
        }
        if($request->hasFile('sub_image_2')){
            
            $product->sub_image_2 = 'small'.time().'.'.$request->sub_image_2->extension();  
            $request->sub_image_2->move(public_path('uploads/k100s'), $product->sub_image_2);
            $product->display_2 = 'flex';
        }
        if($request->hasFile('sub_image_3')){
            
            $product->sub_image_3 = 'small'.time().'.'.$request->sub_image_3->extension();  
            $request->sub_image_3->move(public_path('uploads/k100s'), $product->sub_image_3);
            $product->display_3 = 'flex';
        }
        if($request->hasFile('sub_image_4')){
            
            $product->sub_image_4 = 'small'.time().'.'.$request->sub_image_4->extension();  
            $request->sub_image_4->move(public_path('uploads/k100s'), $product->sub_image_4);
            $product->display_4 = 'flex';
        }
        if($request->hasFile('sub_image_5')){
            
            $product->sub_image_5 = 'small'.time().'.'.$request->sub_image_5->extension();  
            $request->sub_image_5->move(public_path('uploads/k100s'), $product->sub_image_5);
            $product->display_5 = 'flex';
        }

        if(isset($_POST['forget1'])) {

    		$product->update(['sub_image_1' => null]); 
            $product->display_1 = 'none';
            return view('editK100', compact('k100'));
    	}
        else if(isset($_POST['forget2'])) {

    		$product->update(['sub_image_2' => null]); 
            $product->display_2 = 'none';
            return view('editK100', compact('k100'));
    	}
        else if(isset($_POST['forget3'])) {

    		$product->update(['sub_image_3' => null]); 
            $product->display_3 = 'none';
            return view('editK100', compact('k100'));
    	}
        else if(isset($_POST['forget4'])) {

    		$product->update(['sub_image_4' => null]); 
            $product->display_4 = 'none';
            return view('editK100', compact('k100'));
    	}
        else if(isset($_POST['forget5'])) {

    		$product->update(['sub_image_5' => null]); 
            $product->display_5 = 'none';
            return view('editK100', compact('k100'));
        }
 

        $product->save();
        return redirect('/k100Dashboard'); 
     
    }

    public function createK100(Request $request)
    {

        if(isset($_POST['delete'])) {
    		$product->delete();
    		return redirect('/k100Dashboard');
    	}

        $this->validate($request, [
            'product_name' => 'required',
            'product_type' => 'required',
            'description' => 'required',
            'size' => 'required',
            'connectivity' => 'required',
            'switch' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'main_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'sub_image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'display_1' => 'nullable',
            'sub_image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'display_2' => 'nullable',
            'sub_image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'display_3' => 'nullable',
            'sub_image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'display_4' => 'nullable',
            'sub_image_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:100000',
            'display_5' => 'nullable'
        ]);
    	$product = new K100();
        $product->product_name = $request->product_name;
        $product->product_type = $request->product_type;
        $product->description = $request->description;
        $product->size = $request->size;
        $product->connectivity = $request->connectivity;
        $product->switch = $request->switch;
        $product->stock = $request->stock;
        $product->price = $request->price;

        $product->main_image = 'small'.time().'.'.$request->main_image->extension();  
        $request->main_image->move(public_path('uploads/k100s'), $product->main_image);

        if($request->hasFile('sub_image_1')){
            
            $product->sub_image_1 = 'small'.time().'.'.$request->sub_image_1->extension();  
            $request->sub_image_1->move(public_path('uploads/k100s'), $product->sub_image_1);
            $product->display_1 = 'flex';
        }
        if($request->hasFile('sub_image_2')){
            
            $product->sub_image_2 = 'small'.time().'.'.$request->sub_image_2->extension();  
            $request->sub_image_2->move(public_path('uploads/k100s'), $product->sub_image_2);
            $product->display_2 = 'flex';
        }
        if($request->hasFile('sub_image_3')){
            
            $product->sub_image_3 = 'small'.time().'.'.$request->sub_image_3->extension();  
            $request->sub_image_3->move(public_path('uploads/k100s'), $product->sub_image_3);
            $product->display_3 = 'flex';
        }
        if($request->hasFile('sub_image_4')){
            
            $product->sub_image_4 = 'small'.time().'.'.$request->sub_image_4->extension();  
            $request->sub_image_4->move(public_path('uploads/k100s'), $product->sub_image_4);
            $product->display_4 = 'flex';
        }
        if($request->hasFile('sub_image_5')){
            
            $product->sub_image_5 = 'small'.time().'.'.$request->sub_image_5->extension();  
            $request->sub_image_5->move(public_path('uploads/k100s'), $product->sub_image_5);
            $product->display_5 = 'flex';
        }

        

    	$product->save();
    	return redirect('/k100Dashboard'); 
    }
}

