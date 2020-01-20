<?php

namespace App\Http\Controllers\AuthCustom;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\User;

class LoginController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('guest:web')->except('logout');
    }
    

    public function guard()
    {
        return auth()->guard('web');
    }
    
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_email' => 'required|email',
            'user_password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }
        else{
            if ($request->session()->has('UserLevel')) {
                Session::flush();
            }
            if (auth()->guard('web')->attempt(['email' => $request->user_email, 'password' => $request->user_password ])){
                $User = User::where('email', $request->user_email)->first();
                if($User->level == 0){
                    Session::put('UserLevel', 'Admin');
                    Session::put('UserID', $User->id);
                    return response()->json(['success' => 'Admin']);
                }
                else{
                    Session::put('UserLevel', 'Pengguna');
                    Session::put('UserID', $User->id);
                    return response()->json(['success' => 'Pengguna']);
                }
            }
            else
                return response()->json(['defaulterror' => 'Wrong email or password']);
        }
    }

    public function logout ()
    {
        auth()->logout();
        Session::flush();
        return redirect()->route('pages.index');
    }

    public function registerPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'register_user_name'    => 'required',
            'register_user_email'   => 'required|email|unique:users,email',
            'register_user_password'=> 'required|min:5',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }
        else{
            $add = User::create(
                [
                    'name'      => $request->register_user_name,
                    'email'     => $request->register_user_email,
                    'password'  => Hash::make($request->register_user_password),
                    'level'     => 1
                ]
            );
            if($add)
                return response()->json(['success' => 'success']);
            else
                return response()->json(['defaulterror' => 'Something problem.']);
        }
    }
}
