<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function applyForPrimeSeller(){
        return view('seller.applyForPrimeSeller');
    }

    public function home(){
        return view('seller.sellerhome');
    }
    public function createSellPost(){
        return view('seller.CreateSellPost');
    }
    public function myPosts(){
        return view('seller.myposts');
    }
    public function statements(){
        return view('seller.sellerStatements');
    }
    public function orders(){
        return view('seller.sellerorders');
    }
    public function contactSupport(){
        return view('seller.sellerContactSupport');
    }
    public function orderDetails(){
        return view('seller.OrderDetails');
    }
    public function editSellPost(){
        return view('seller.EditSellPost');
    }
    public function editProfile(){
        return view('seller.sellerEditProfile');
    }
    public function statementDetails(){
        return view('seller.statementDetails');
    }
}
