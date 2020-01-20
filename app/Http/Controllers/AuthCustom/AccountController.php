<?php

namespace App\Http\Controllers\AuthCustom;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\User;



class AccountController extends Controller
{ 
    public function profile(Request $request)
    {
        return view('home.user.profile');
    }
    public function profiletab(Request $request)
    {
        return view('home.user.profiletab');
    }
    public function profileUpdate(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'        => ['required', 'string', 'max:255'],
            'email'       => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$request->id.''],
            'password'    => ['required']
        ]);
        
        if ($validator->fails()) 
            return response()->json(['error' => $validator->errors()->all()]);
        else
        {
            $data = User::find($request->id);
            if(!empty($data))
            {
                if (Hash::check($request->password, $data->password)) {
                        $update = User::where('id', $request->id)->update(
                            [
                                'name' => $request->name,
                                'email' => $request->email
                            ]
                        );
                    if($update)
                        return response()->json(['success' => 'success']);
                    else
                        return response()->json(['defaulterror' => 'Something Errors.']);
                }
                else{
                    return response()->json(['errorpass' => 'Password not match']);
                }
            }
            else
            {
                return response()->json(['defaulterror' => 'User not found']);
            }
        }
    }
}
