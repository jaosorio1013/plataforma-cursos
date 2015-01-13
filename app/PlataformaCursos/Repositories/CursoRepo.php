<?php namespace PlataformaCursos\Repositories;

use PlataformaCursos\Entities\Curso;

class CursoRepo extends BaseRepo {

    public function getModel()
    {
        return new Curso;
    }

    public function listaCursos()
    {
        return Curso::with(['imagen', 'retos'])->get();
    }

}