<?php

use PlataformaCursos\Repositories\RetoRepo;

class RetosControlle extends BaseController {

	protected $retoRepo;

	public function __construct(RetoRepo $retoRepo)
	{
		$this->retoRepo = $retoRepo;
	}

	public function datosReto($idReto)
	{
		$reto = $this->retoRepo->find($idReto)->select('nombre', 'texto');
		dd($reto);
		return $reto->toJson();
	}

}
