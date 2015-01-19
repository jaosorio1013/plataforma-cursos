<?php

class AuthController extends BaseController {

	public function loginAdmin()
	{
		return View::make('admin/login');
	}

	public function logout()
	{
		Auth::logout();
		return Redirect::route('home');
	}

	public function ingresoAdmin()
	{
		if($this->ingresoUsuario(true))
		{
			return Redirect::to('admin');
		}

		return Redirect::back()->with('login_error', 1);
	}

	public function ingreso()
	{
		if($this->ingresoUsuario())
		{
			return Redirect::back();
		}

		return Redirect::back()->with('login_error', 1);
	}

	private function ingresoUsuario($validarAdmin = false)
	{
		$data = Input::only(['email', 'password', 'remember']);
		$datosLogin = [
			'email' => $data['email'],
			'password' => $data['password'],
			'activado' => true,
		];

		if($validarAdmin)
		{
			$datosLogin['rol'] = 'admin';
		}

		return Auth::attempt($datosLogin);
	}

}
