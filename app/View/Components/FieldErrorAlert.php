<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FieldErrorAlert extends Component
{
	public string $message;
	public string $ariaDescribedby;
	
	/**
	 * Create a new component instance.
	 *
	 * @return void
	 */
	public function __construct(string $message = 'Error en este campo', string $ariaDescribedby = '')
	{
		$this->message         = $message;
		$this->ariaDescribedby = $ariaDescribedby;
	}
	
	/**
	 * Get the view / contents that represent the component.
	 *
	 * @return \Illuminate\Contracts\View\View|\Closure|string
	 */
	public function render()
	{
		return view('components.field-error-alert');
	}
}
