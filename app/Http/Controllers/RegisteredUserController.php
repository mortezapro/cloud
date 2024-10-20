<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }

    public function sendRegisterEmail(Request $request)
    {
        $mobile = $request->input("mobile");
        $user = User::where("mobile",$mobile)->first();
        if($user){
            return redirect()->route("register")->with("user-exist",true);
        }
        $user = User::create([
           "mobile" => $mobile
        ]);
        // send sms code
    }

    public function verifyRegister(Request $request)
    {
        // verify user and complete profile
        // call makeBaseDirectory of DirectoryService
        // update user base directory in table of user
    }
}
