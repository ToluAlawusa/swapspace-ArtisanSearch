<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLogin extends Controller 
{

	public function showAdminLogin() {

          return view('adminlogin');
	}

	public function doAdminLogin(Request $request) {

       $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
            ]);
            
            if(!Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            	return redirect()->back()->with(['fail' => 'email or password incorrect']);
            }

            return redirect()->route('index');
    }
}
