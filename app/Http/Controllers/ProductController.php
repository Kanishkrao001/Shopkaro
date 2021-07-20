<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use App\Cart;

class ProductController extends Controller
{
    public function insertt()
    {
        // $pd = new Product;
        $data = DB::table("products")->insert([
            // [ "category_id"=>"1",  "Product_Name"=>"Oppo X2", "Product_Description"=>" Best for gaming", "price"=>"17999", "Pieces_available"=>"10" ],
            [ "category_id"=>"1",  "Product_Name"=>"redmi 10", "Product_Description"=>"latest processor", "price"=>"13999", "Pieces_available"=>"20" ],
            [ "category_id"=>"2",  "Product_Name"=>"Titan Gold", "Product_Description"=>" classic looks", "price"=>"1999", "Pieces_available"=>"10" ],
            [ "category_id"=>"2",  "Product_Name"=>"Gshock Sports", "Product_Description"=>" water resistant", "price"=>"7999", "Pieces_available"=>"10" ],
            [ "category_id"=>"2",  "Product_Name"=>"Rado R3", "Product_Description"=>" known for design", "price"=>"17999", "Pieces_available"=>"10" ],
            [ "category_id"=>"3",  "Product_Name"=>"Predator", "Product_Description"=>" gaming king", "price"=>"117999", "Pieces_available"=>"5" ]
        ]);

    }

    public function view()
    {
        $data = Product::all();
        return view('shopkaro.index', compact('data'));
    }

    public function detail($product_id)
    {
        $data = Product::find($product_id);
        return view('shopkaro/detail', compact('data'));
    }
    //
    public function addtocart(Request $request)
    {
        if($request->session()->has('user')){
            // return "added to cart";
            $cart = new Cart;
            $cart->customer_id = $request->session()->get('user')['customer_id'];
            $cart->product_id = $request->product_id;
            $cart->save();

            return redirect('/shopkaro/details/{{ $request->product_id }}');
        }
        else{
            return redirect('/shopkaro/login');
        }
    }


}
