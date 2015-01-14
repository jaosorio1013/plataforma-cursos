<?php namespace PlataformaCursos\Repositories;

use PlataformaCursos\Entities\Curso;

class CursoRepo extends BaseRepo {

    public function getModel()
    {
        return new Curso;
    }

    public function listaCursos()
    {
        $listaCursos = Curso::with(['imagen', 'retosCurso.leccion.modulo'])->get();

        foreach($listaCursos AS $curso)
        {
            $curso->modulos = $this->modulosCurso($curso->retosCurso);
        }

        return $listaCursos;
    }

    public function modulosCurso($retosCurso, $limite = 0)
    {
        $datosModulos = array();

        foreach($retosCurso AS $reto)
        {
            $modulo = $reto->leccion->modulo;
            $datosModulos[$modulo->id] = $modulo->nombre;
        }

        return $datosModulos;
    }

}