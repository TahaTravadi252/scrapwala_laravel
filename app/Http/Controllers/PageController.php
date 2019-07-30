<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('welcome');
    }
    public function aboutUs()
    {
        return view('aboutUs');
    }
    public function contactUs()
    {
       
        return view('contactUs');
    }
    public function contactUSPost(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        
        $data=array('name'=>$name,'email'=>$email,'message'=>$message);
        Contact::create($data);
        echo "Record inserted successfully";
       exit;
    }
    
    public function terms()
    {
        return view('terms');
    }

}
        
    

