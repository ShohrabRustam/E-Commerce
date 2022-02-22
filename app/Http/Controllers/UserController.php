<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // 

    public function login(Request $req){
        // return $req->input();
        $user= User::where(['email' => $req->email])->first();
        if( Hash::check($req->password,$user->password)){
            $req->session()->put('user',$user);
            return redirect('/');
        }
        else{
            return "username or password incorrect";
        }
    }

    public function registration(Request $req){

        $user=new User;
        $user->name = $req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
    
        return redirect('/login');


    }
   
}
