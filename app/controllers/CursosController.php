<?php

use PlataformaCursos\Repositories\CursoRepo;

class CursosController extends BaseController {

	protected $cursoRepo;

	public function __construct(CursoRepo $cursoRepo)
	{
		$this->cursoRepo = $cursoRepo;
	}

	public function detalleCurso($slug)
	{
		$curso = $this->cursoRepo->cursoPorSlug($slug);

		return View::make('cursos/detalle-curso', compact('curso'));
	}

}
