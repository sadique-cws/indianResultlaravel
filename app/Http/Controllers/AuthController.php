<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    function schoolLogin(Request $request){
        $email = $request->email;
        $password = $request->password;

        $user = User::where("email",$email)->first();

        if($user){
            if(Hash::check($password,$user->password)){
                $request->session()->put("user",$email);
                return redirect()->route("school.dashboard"); 
            }
            else{
                echo "not password is good";
            }
        }
        else{
            echo "email not found";
        }

    }

    function schoolLogout(Request $request){
        $request->session()->forget("user");
        return redirect()->route("school.login");
    }



}
