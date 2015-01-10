<?php

use PlataformaCursos\Repositories\CursoRepo;

class HomeController extends BaseController {

	protected $cursoRepo;

	public function __construct(CursoRepo $cursoRepo)
	{
		$this->cursoRepo = $cursoRepo;
	}

	public function index()
	{
		$cursos = $this->cursoRepo->all();

		return View::make('home', compact('cursos'));
	}

}
