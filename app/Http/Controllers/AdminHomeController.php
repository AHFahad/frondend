<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index(Request $req){

        $email = $req->session()->get('email');

        if($req->session()->has('email')){
            return view('admin.adminHome', compact('email'));
        }else{
            $req->session()->flash('msg', 'You Have to Login First');
            return redirect('/login');
        }
    }

    public function editProfile(Request $req){
        $email = $req->session()->get('email');

        if($req->session()->has('email')){
            return view('admin.adminEditProfile');
        }else{
            $req->session()->flash('msg', 'You Have to Login First');
            return redirect('/login');
        }
    }

    public function viewAllUserInfo(Request $req){
        $email = $req->session()->get('email');

        if($req->session()->has('email')){
            return view('admin.adminViewAllUserInfo');
        }else{
            $req->session()->flash('msg', 'You Have to Login First');
            return redirect('/login');
        }
    }

    public function viewAllTransaction(Request $req){
        $email = $req->session()->get('email');

        if($req->session()->has('email')){
            return view('admin.adminViewAllTransaction');
        }else{
            $req->session()->flash('msg', 'You Have to Login First');
            return redirect('/login');
        }
    }

    public function userReports(Request $req){
        $email = $req->session()->get('email');

        if($req->session()->has('email')){
            return view('admin.adminUserReports');
        }else{
            $req->session()->flash('msg', 'You Have to Login First');
            return redirect('/login');
        }
    }

    public function announcement(Request $req){
        $email = $req->session()->get('email');

        if($req->session()->has('email')){
            return view('admin.adminAnnouncement');
        }else{
            $req->session()->flash('msg', 'You Have to Login First');
            return redirect('/login');
        }
    }

    public function editUserInfo(Request $req){
        $email = $req->session()->get('email');

        if($req->session()->has('email')){
            return view('admin.adminEditUserInfo');
        }else{
            $req->session()->flash('msg', 'You Have to Login First');
            return redirect('/login');
        }
    }
}
