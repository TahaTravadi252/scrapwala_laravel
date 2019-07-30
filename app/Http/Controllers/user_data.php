<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class user_data extends Controller
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
    public function registeruser()
    {
        $users = User::get();
        return view('admin_register_user', ['users' => $users]);
    }
    public function user_delete($id)
    {
       
        $users = User::find($id);
        $users->delete();
        return redirect("/home");
    }
}
