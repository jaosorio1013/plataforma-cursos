<?php

use PlataformaCursos\Repositories\CursoRepo;

class UsersController extends BaseController {

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
