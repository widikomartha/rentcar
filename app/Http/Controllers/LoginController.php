<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    //
    public  function signin()
    {
        return view('logins.signin');
    }

    public function login(Request $request)
    {

        $notification_gagal = array(
            'message' => 'Login Gagal',
            'alert-type' => 'error'
        );

         $notification_berhasil = array(
            'message' => 'Login berhasil',
            'alert-type' => 'success'
        );

        if(!\Auth::attempt(['email' => $request->email, 'password' => $request->password ])){
            return redirect()->back()->with($notification_gagal);

        }else {
            if(\Auth::user()->role=="user"){
                return redirect('/user');
                //return redirect()->intended('defaultpage');
            }else{
                return redirect('/admin/index');
            }
            
        }
    
    }



    public function signup()
    {
        return view('logins.signup');
    }
}
