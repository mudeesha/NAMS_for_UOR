<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemporaryUserController extends Controller
{
    function application(Request $req){
        return $req->file('application')->store('docs/temp_users/user1');
    }

    function id(Request $req){
        return $req->file('id')->store('docs/temp_users/user1');
    }
}
