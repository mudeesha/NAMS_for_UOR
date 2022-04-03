<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\temporary_user;

class TemporaryUserController extends Controller
{
    function application(Request $req){
        return $req->file('application')->store('docs/temp_users/user1');
    }

    function id(Request $req){
        return $req->file('id')->store('docs/temp_users/user1');
    }


    function toUploadPage(){
        return view("tempory_user.registration.upload");
    }

    function toApplication(){
        return view("tempory_user.registration.application");
        
    }

    function addData(Request $req){
        $temporary_user = new temporary_user;
        $temporary_user->fname=$req->fname;
        $temporary_user->mname=$req->mname;
        $temporary_user->lname=$req->lname;
        $temporary_user->gender=$req->gender;
        $temporary_user->civil_status=$req->civil_status;
        $temporary_user->current_postal_address=$req->current_postal_address;
        $temporary_user->permenant_postal_address=$req->permenant_postal_address;
        $temporary_user->current_mobile=$req->current_mobile;
        $temporary_user->permenant_mobile=$req->permenant_mobile;
        $temporary_user->police_division=$req->police_division;
        $temporary_user->email=$req->email;
        $temporary_user->dob=$req->dob;
        $temporary_user->age_as_at_closing_date=$req->age_as_at_closing_date;
        $temporary_user->citizenship=$req->citizenship;
        $temporary_user->nic=$req->nic;
        $temporary_user->driving_licen_no=$req->driving_licen_no;
        $temporary_user->driving_licen_issuing_date=$req->driving_licen_issuing_date;
        $temporary_user->save();
        return redirect('application');
    }

}
