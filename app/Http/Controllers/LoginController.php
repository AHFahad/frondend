<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function verify(Request $req){
         $req->session()->put('email', $req->email);

        if($req->email == $req->password){
            if($req->email == "admin@gmail.com"){
                //set session or cookie
                return redirect('/adminHome');
            }
            elseif($req->email == "user@gmail.com"){
                return redirect('/user/home');
            }
            elseif($req->email == "seller@gmail.com"){
                return redirect('/seller/home');
            }
        }else{
            //echo "Invalid User";
            $req->session()->flash('msg', 'Invalid email or password!');
            return redirect('/login');
        }
        
    }
}