<?php

namespace App\Http\Controllers;
use App\User;
use App\Price;

use Illuminate\Http\Request;

class product_data extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function admin_insert_product()
    {
       return view('admin_insert_product');
    }
    public function admin_insert_productPost(Request $request)
    {
        $product_name = $request->input('product_name');
        $product_price = $request->input('product_price');
     
        
        $data=array('product_name'=>$product_name,'product_price'=>$product_price);
        Price::create($data);
        return view('admin_insert_product');
      

    }
    public function admin_product_price()
    {
        /*return view('admin_product_price');*/
        $prices = Price::get();
        return view('admin_product_price', ['prices' => $prices]);
    }
    public function product_delete($id)
    {
       
        $prices = Price::find($id);
        $prices->delete();
        return redirect("/home");
    }
    public function edit_product($id)
    {
       
       /* $prices = Price::find($id);*/
       $product = Price::find($id);
       return view('admin_edit_product', ['product' => $product]);
       
        /*return redirect("admin_edit_product");*/
    }
    public function edit_save($id, Request $request)
    {
        $data = $request->all();

        // save product based on id
        $product = Price::find($id);
        $product->product_name = $data['product_name'];
        $product->product_price = $data['product_price'];
       
        $product->save();
        return redirect('home/admin_price');
    }

}
