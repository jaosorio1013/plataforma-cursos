<?php namespace PlataformaCursos\Repositories;

use PlataformaCursos\Entities\Curso;

class CursoRepo extends BaseRepo {

    public function getModel()
    {
        return new Curso;
    }

}