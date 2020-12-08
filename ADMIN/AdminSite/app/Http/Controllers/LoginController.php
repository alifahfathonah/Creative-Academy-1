<?php

namespace App\Http\Controllers;

use App\Model\AdministratorModel;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    function LoginPage(){
        return view('Login');
    }

    function onLogout(Request $request){
        $request->session()->flush();
        return redirect('/Login');
    }


    function onLogin(Request $request){
        $user= $request->input('user');
        $pass= $request->input('pass');
        $countValue=AdministratorModel::where('username',$user)->where('password',$pass)->count();

        if($countValue==1){
            $request->session()->put('user',$user);
            return 1;
        }
        else{
            return 0;
        }

    }
}
