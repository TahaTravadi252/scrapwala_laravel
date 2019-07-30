<?php

namespace App\Http\Controllers;
use App\Scrap_order;
use Illuminate\Http\Request;

class order_data extends Controller
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
    
    public function admin_order()
    {
        /*return view('admin_order');*/
        $orders = Scrap_order::get();
        return view('admin_order', ['orders' => $orders]);
    }
   
    
    public function Scrap_order_delete($id)
    {
       
        $prices = Scrap_order::find($id);
        $prices->delete();
        return redirect("home/admin_order");
    }
    public function Status_update($id,Request $request)
    {
       
        $order = Scrap_order::find($id);
        $order->Status ="Done";
        $order->save(); 
       
        
        return redirect('home/admin_order');
       
        
    }
}
