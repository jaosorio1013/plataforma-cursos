<?php namespace PlataformaCursos\Repositories;

use PlataformaCursos\Entities\Profesor;

class ProfesorRepo extends BaseRepo {

    public function getModel()
    {
        return new Profesor;
    }

}