<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Directory\DirectoryServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    protected $directoryService;
    public function __construct()
    {
        $this->directoryService = App::make(DirectoryServiceInterface::class);
    }
    public function loginFrom()
    {
        return view("auth.login");
    }

    public function sendAuthenticateCode(Request $request)
    {
        $mobile = $request->input("mobile");
        $user = User::where("mobile",$mobile)->first();
        if(!$user){
            $user = User::create([
                "mobile" => $mobile
            ]);
        }
        $verificationCode = mt_rand(11111,99999);
        session()->put("mobile",$mobile);
        session()->put("verification-code",$verificationCode);
        // send login sms code
        return view("auth.verify-mobile");
    }

    public function verifyAuthenticate(Request $request)
    {
        $mobile = session()->get("mobile");

        $verificationCode = $request->input("verification-code");
        /*if($verificationCode != session()->get("verification-code")){
            return redirect()->back()->with("verification-mismatch");
        }*/
        if($verificationCode != 12345){
            $mismatch = true;
            return view("auth.login",compact("mismatch"));
        }
        $user = User::where("mobile",$mobile)->firstOrFail();

        Auth::guard("user")->login($user);
        $baseDirectoryName = $this->directoryService->makeBaseDirectory();
        if(!$user->is_active){
            $user->is_active = 1;
            $user->save();
        }
        if(!$user->base_directory_name){
            $user->base_directory_name = $baseDirectoryName;
            $user->save();
        }
        return redirect()->route("profile.dashboard");
    }
}
