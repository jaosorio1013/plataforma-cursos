<?php

use PlataformaCursos\Repositories\CursoRepo;

class AuthController extends BaseController {

	protected $cursoRepo;

	public function __construct(CursoRepo $cursoRepo)
	{
		$this->cursoRepo = $cursoRepo;
	}

	public function index()
	{
		return View::make('usuarios/login');
	}

	public function loginUsuario()
	{

	}

}
