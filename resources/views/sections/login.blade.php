@extends('layout.layout')
@section('title', 'Inicio de sesion')
@section('content')
	<section class="flex min-h-[calc(100vh-4rem)]">
		<div class="flex flex-1 flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
			<div class="mx-auto w-full max-w-sm lg:w-96">
				<h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">Inicia sesion</h2>
				
				<div class="mt-8">
					<div class="mt-6">
						<form
							action="#"
							method="POST"
							class="space-y-6"
							novalidate
						>
							@csrf
							<div>
								<label
									for="email"
									class="block text-sm font-medium text-gray-700"
								>
									Email
								</label>
								<div class="mt-1 space-y-2">
									<input
										id="email"
										name="email"
										type="email"
										autocomplete="email"
										class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
									>
									@error('email')
									<x-field-error-alert message="{{ $message }}" aria-describedby="email" />
									@enderror
								</div>
							</div>
							
							<div class="space-y-1">
								<label
									for="password"
									class="block text-sm font-medium text-gray-700"
								>
									Password
								</label>
								<div class="mt-1 space-y-2">
									<input
										id="password"
										name="password"
										type="password"
										autocomplete="current-password"
										required
										class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
									>
									@error('password')
									<x-field-error-alert message="{{ $message }}" aria-describedby="password" />
									@enderror
								</div>
							</div>
							@error('error')
							<x-field-error-alert message="{{ $message }}" />
							@enderror
							<div class="text-sm">
								<a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Olvidaste tu contrasena?</a>
							</div>
							<div>
								<button
									type="submit"
									class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm
									hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
								>
									Iniciar sesion
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="relative hidden w-0 flex-1 lg:block">
			<img
				class="absolute inset-0 h-full w-full object-cover"
				src="{{ asset('src/assets/images/login/bg-login.jpg') }}"
				alt=""
			>
		</div>
	</section>
@endsection