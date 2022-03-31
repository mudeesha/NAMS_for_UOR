<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(){
       
        return view('tempory_user.login');
    }
    
    public function Logout(){
        Auth::logout();
        return Redirect()->route('login');
    }
}

?>