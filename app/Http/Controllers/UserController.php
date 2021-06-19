<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('user.userHome');
    }

    public function edit() {
        return view('user/editProfile');
    }

    public function history() {
        return view('user/history');
    }
    public function detailsHistory() {
        return view('user/detailsHistory');
    }
    public function follow() {
        return view('user/followList');
    }

    public function register() {
        return view('user/userRegister');
    }

}
