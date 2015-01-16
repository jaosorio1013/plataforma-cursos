<?php namespace PlataformaCursos\Repositories;

use PlataformaCursos\Entities\Curso;

class CursoRepo extends BaseRepo {

    public function getModel()
    {
        return new Curso;
    }

    public function listaCursos()
    {
        //$listaCursos = Curso::with(['imagen', 'retosCurso.leccion.modulo'])->get();//->where('activado', true)->get();
        $listaCursos = Curso::with(['imagen', 'retosCurso.leccion.modulo'])->where('activado', true)->get();

        foreach($listaCursos AS $curso)
        {
            $curso->modulos = $this->modulosCurso($curso->retosCurso);
        }

        return $listaCursos;
    }

    public function modulosCurso($retosCurso)
    {
        $datosModulos = array();

        foreach($retosCurso AS $reto)
        {
            $modulo = $reto->leccion->modulo;
            $datosModulos[$modulo->id] = $modulo->nombre;
        }

        return $datosModulos;
    }

    public function cursoPorSlug($slug)
    {
        $curso = Curso::with('imagen', 'retosCurso.leccion.modulo.imagen')
            ->where('slug', $slug)->where('activado', true)->first();
        $modulos = [];

        if($curso)
        {
            foreach($curso->retosCurso As $reto)
            {
                $idModulo = $reto->leccion->modulo->id;
                $nombreModulo = $reto->leccion->modulo->nombre;
                $imagenModulo = $reto->leccion->modulo->imagen->path;
                $idLeccion = $reto->leccion->id;
                $nombreLeccion = $reto->leccion->nombre;

                $modulos[$idModulo]['nombre'] = $nombreModulo;
                $modulos[$idModulo]['imagen'] = $imagenModulo;
                $modulos[$idModulo]['lecciones'][$idLeccion] = $nombreLeccion;
            }

            $curso->modulos = array_values($modulos);
            return $curso;
        }

        return false;
    }

    public function clasePorSlug($slug)
    {
        return false;
    }

}