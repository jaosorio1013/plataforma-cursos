<?php

use PlataformaCursos\Repositories\UserRepo;

class AuthController extends BaseController {

	protected $userRepo;

	public function __construct(UserRepo $userRepo)
	{
		$this->userRepo = $userRepo;
	}

	public function login()
	{
		return View::make('admin/login');
	}

	public function loginUsuario()
	{
		$datosLogin = [
			'email' => Input::only('email'),
			'password' => Input::only('password'),
			'activado' => true,
		];

		if(Auth::attempt($datosLogin))
		{
			return 'acediste';
		}
		else
		{
			return 'No accediste';
		}
	}

}
