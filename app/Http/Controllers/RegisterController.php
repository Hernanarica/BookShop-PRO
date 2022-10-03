<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
	public function create()
	{
		return view('sections.register');
	}
	
	public function store(RegisterRequest $request)
	{
		User::create([
			'name'     => $request->name,
			'email'    => $request->email,
			'password' => Hash::make($request->password),
		]);
		
		return to_route('login.index');
	}
}
