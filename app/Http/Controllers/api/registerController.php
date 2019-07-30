<?php

namespace App\Http\Controllers\api;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class registerController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors());
        }else{
            $data = $request->all();
             $user = User::create($data);
             return response()->json($user);
        }
    }
    public function login(Request $request)
    {
       /* echo "hi";*/
        $response = [];
        
        $data = $request->all();
        $email = $data['email'];
        $user = User::where("email", $email)->get()->first();
        if($user){
            $hasher = app('hash');
            if ($hasher->check($data['password'], $user->password)){
                $response['status'] = true;
                $response['data'] = $user;
            }else{
                $response['status'] = false;
                $response['message'] = "Password not match";
            }
        }else{
            $response['status'] = false;
            $response['message'] = "User not exist";
        }
        
        return response()->json($response);
        
        
    }
}
