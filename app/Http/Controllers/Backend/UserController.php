<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;

class UserController extends Controller
{
    public function UserView(){
       // $allData = User::all();
       $data['allData'] = User::all();
       return view('backend.user.view_user', $data);

    }


    public function UserAdd(){
        return view('backend.user.add_user');
    }

    public function UserStore(Request $request){
        
        $validatedData = $request->validate([
            'email'=>'required|unique:users',
            'name'=>'required',

        ]);

        $data = new user();
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        //$data->date = $request->date;
        $data->email = $request->email;
        $data->password= bcrypt($request->password);
        $data->save();

        $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success'
        );

        

        return redirect()->route('user.view')->with($notification);
    }

    public function ShowProfile(){
        $data= Employee::all();
        return view ('profile',['Employeez'=>$data]);
    }
}
