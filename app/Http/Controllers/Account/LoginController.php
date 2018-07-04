<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\User;
class LoginController extends Controller
{
    public function getLoginAdmin()
    {
    	return view('admin.login');
    }
    public function postLoginAdmin(Request $request)
    {
    	$remember = (Input::has('remember')) ? true : false;
    	$data = [
            'username' => $request->txtUsername,
            'password' => $request->txtPassword,
        ];
    	if(Auth::attempt($data,$remember)){
    		return redirect()->route('getIndexAdmin')->with('success',trans('login.loginSuccessfully'));
    	}
    	else{
    		return redirect()->route('login')->with('error',trans('login.loginFailed'));
    	}
    }
    public function getLogoutAdmin() {
       Auth::logout();
       return redirect()->route('getLoginAdmin');
    }
}
