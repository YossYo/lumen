<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
class  ProductController extends Controller{

    //create new Product
    public function createProduct(Request $request){
  
        // $image       = $request->file('image');
        // $filename    = $image->getClientOriginalName();

        // //Fullsize
        // $image->move(public_path().'/images/',$filename);

        // $image_resize = Image::make(public_path().'/images/'.$filename);
        // $image_resize->fit(300, 300);
        // $image_resize->save(public_path('images/' .$filename));
        
            
     
        //dd($image);
        $product = new Product;
        $product->name= $request->name;
        $product->price = $request->price;
        $product->details= $request->details;
        $product->image =  $request->image;
      
         $product->save();
        return response()->json($product);
    }
    
    //update Product details
    
    public function updateProduct(Request $request, $id){
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->details =  $request->input('details');
        $product->image = $request->input('image');
        $product->price = $request->input('price');
        $product->save();
        return response()->json($product);
    }


    //view Product
    public function viewProduct($id){
     $product =  Product::find($id);
            return response()->json($product);
    }


    //delete Product(
    public function deleteProduct($id){
        $product =  Product::find($id);
        $product->delete();

        return response()->json('Removed successfully');
    }

    //list Products
    public function index(){
        $product =Product::all();
        return response()->json($product);
    }

} 
?>