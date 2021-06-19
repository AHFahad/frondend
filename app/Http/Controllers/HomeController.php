<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    
    public function login(){
        return view('home.login');
    }
    
    public function index(){
         return view('home.index');
    }

    public function contact(){
        return view('home.contact');
   }

   public function help(){
    return view('home.help');
    }

    public function home(){
        return view('home.index');
    }

    public function announcement(){
        return view('home.announcement');
    }

    public function postCard(){
        return view('home.postCard');
    }

    public function chatbox(){
        return view('home.chatbox');
    }
   
}
