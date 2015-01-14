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
		if($curso)
		{
			return View::make('cursos/detalle-curso', compact('curso'));
		}
		else
		{
			echo 'Curso no activado';
		}
	}

}
