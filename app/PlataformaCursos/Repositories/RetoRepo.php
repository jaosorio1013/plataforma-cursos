<?php namespace PlataformaCursos\Repositories;

use PlataformaCursos\Entities\Reto;

class RetoRepo extends BaseRepo {

    public function getModel()
    {
        return new Reto;
    }

}