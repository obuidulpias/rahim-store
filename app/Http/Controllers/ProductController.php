<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function homeControl() {
        $products = Product::all();
        return view('home', ['products'=> $products]);
    }
    public function filterProduct(Request $request) {
        //$products = Product::all();
        $min = $request -> min_price;
        $max = $request -> max_price;
        
        $products = Product::where(function($query) {
            
            if(isset($min) && isset($max)) {
                
                $query  ->where('price', '>=' , $min)
                        ->where('price', '<=' , $max);
            }
        
        
        })->get();
        return view('home', ['products'=> $products]);
       
    }
    
    public function index() {
        return view('product.create-product');
    }
    public function creatProduct(Request $request) {
        $product = new Product();
        $product -> product_name        = $request -> product_name;
        $product -> product_price       = $request -> product_price;
        $product -> product_expiry_date = $request -> product_expiry_date;
        //return $product;
        $product -> save();

        return redirect('product')-> with('message', 'Product Created Successfully');
    }
    public function manageProduct() {
        $products = Product::all();
        //return $products;
        return view('product.manage-product', ['products'=> $products]);
    }
    public function editProduct($id) {
        $product = Product::find($id);
        return view('product.edit-product', ['product'=> $product]);

    }
    public function updateProduct(Request $request) {
        $product = Product::find($request-> product_id);
        $product -> product_name        = $request -> product_name;
        $product -> product_price       = $request -> product_price;
        $product -> product_expiry_date = $request -> product_expiry_date;
        //return $product;
        $product -> save();

      return redirect('/manage-product')->with('message', 'Product Info Updated');
    }
    public function deleteProduct($id) {
        $product = Product::find($id);
        $product -> delete();

      return redirect('/manage-product')->with('message', 'Product Info Deleted');
    }

}
