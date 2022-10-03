<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	public function index()
	{
		return view('sections.login');
	}
	
	public function store(LoginRequest $request)
	{
		if (Auth::attempt($request->only(['email', 'password']))) {
			$request->session()->regenerate();

			return redirect()->intended('/');
		}
		
		return back()->withErrors([
			'error' => 'Las credenciales ingresadas son incorrectas'
		]);
	}
}
