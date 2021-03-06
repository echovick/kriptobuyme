<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Route;

class AdminLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:admin', ['except' => ['logout']]);
	}
	
	public function showLoginForm()
	{
		return view('auth.admin_login');
	}
	
	public function login(Request $request)
	{
		// Validate the form data
		$this->validate($request, [
			'name'   => 'required',
			'password' => 'required|min:6'
		]);

		// Attempt to log the user in
		if (Auth::guard('admin')->attempt(['name' => $request->name, 'password' => $request->password])) {
			// if successful, then redirect to their intended location
			return redirect()->intended(view('admin.index'));
		} 
		// if unsuccessful, then redirect back to the login with the form data
		return redirect()->back()->withInput($request->only('name', 'remember'));
	}
	
	public function logout()
	{
		Auth::guard('admin')->logout();
		return redirect('/admin');
	}
}
