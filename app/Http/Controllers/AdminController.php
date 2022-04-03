<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(){
       
        return view('auth.login');
    }
    
    public function Logout(){
        //need session clear
        Auth::logout();
        return Redirect()->route('login');
    }
}

?>