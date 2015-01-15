<?php

use PlataformaCursos\Repositories\CursoRepo;

class ClasesController extends BaseController {

	protected $cursoRepo;

	public function __construct(CursoRepo $cursoRepo)
	{
		$this->cursoRepo = $cursoRepo;
	}

	public function detalleClase($slug)
	{
		$clase = $this->cursoRepo->clasePorSlug($slug);

		if($clase)
		{
			return View::make('clase/detalle', compact('clase'));
		}
		else
		{
			echo 'No tiene permiso para este curso';
		}
	}

}
