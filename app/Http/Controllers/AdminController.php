<?php

namespace App\Http\Controllers;
use App\User;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    
   
    public function admin_message()
    {
       // return view('admin_message');
       $messages = Contact::get();
        return view('admin_message', ['messages' => $messages]);
    }
    public function contact_show()
    {
        $prices = Contact::get();
        return view('', ['prices' => $prices]);
    }
    public function message_delete($id)
    {
       
        $prices = Contact::find($id);
        $prices->delete();
        return redirect("/home");
    }
    
   
   
}
