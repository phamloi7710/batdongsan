<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminController extends Controller
{
    public function getIndexAdmin()
    {
    	if(Auth::check())
    	{
    		return view('admin.index');
    	}
    	else
    	{
    		return redirect()->route('login');
    	}
    	
    }
}
