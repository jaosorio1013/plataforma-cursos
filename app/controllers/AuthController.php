<?php

class AuthController extends BaseController {

	public function loginAdmin()
	{
		return View::make('admin/login');
	}

	public function ingresoAdmin()
	{
		if($this->ingresoUsuario())
		{
			return 'Acceso Admin';
		}
		else
		{
			return 'No acceso';
		}
	}

	public function ingreso()
	{
		if($this->ingresoUsuario())
		{
			return 'Acceso Usuario';
		}
		else
		{
			return 'No acceso';
		}
	}

	private function ingresoUsuario()
	{
		$data = Input::only(['email', 'password', 'remember']);
		$datosLogin = [
			'email' => $data['email'],
			'password' => $data['password'],
			'activado' => true,
		];

		return Auth::attempt($datosLogin);

		/*if(Auth::attempt($credentials, $data['remember']))
		{
			return Redirect::back();
		}*/
	}

}
