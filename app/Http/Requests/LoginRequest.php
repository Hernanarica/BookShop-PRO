<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}
	
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules(): array
	{
		return [
			'email'    => ['required', 'email'],
			'password' => ['required', 'min:4'],
		];
	}
	
	/**
	 * @return string[]
	 */
	public function messages(): array
	{
		return [
			'email.required'    => 'El email es obligatorio',
			'email.email'       => 'El email debe tener formato de email',
			'password.required' => 'La contraseña es obligatoria',
			'password.min'      => 'Debe tener minimo 4 caracteres',
		];
	}
}
