<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
			'name'     => ['required', 'min:2'],
			'email'    => ['required', 'email', 'unique:users'],
			'password' => ['required', 'min:4', 'confirmed'],
		];
	}
	
	/**
	 * Message applied to validation rules
	 *
	 * @return string[]
	 */
	public function messages(): array
	{
		return [
			'name.required'      => 'El nombre es obligatorio',
			'name.min'           => 'Debe tener minimo 2 caracteres',
			'email.required'     => 'El email es obligatorio',
			'email.email'        => 'El email debe tener formato de email',
			'email.unique'       => 'El email ya existe en el sistema',
			'password.required'  => 'La contraseña es obligatoria',
			'password.min'       => 'Debe tener minimo 4 caracteres',
			'password.confirmed' => 'Las contraseñas no coinciden',
		];
	}
}
