<?php namespace PlataformaCursos\Repositories;

use PlataformaCursos\Entities\Curso;

class CursoRepo extends BaseRepo {

    public function getModel()
    {
        return new Curso;
    }

    public function listaCursos()
    {
        $listaCursos = Curso::with(['imagen', 'retosCurso.categoriaReto'])->where('activado', true)->get();

        foreach($listaCursos AS $curso)
        {
            $curso->categorias = $this->categoriasCuro($curso->retosCurso);
        }

        return $listaCursos;
    }

    public function categoriasCuro($retosCurso)
    {
        $datosCategorias = array();

        foreach($retosCurso AS $reto)
        {
            $datosCategorias[$reto->categoria_reto_id] = $reto->categoriaReto->nombre;
        }

        return $datosCategorias;
    }

    public function cursoPorSlug($slug)
    {
        $curso = Curso::with('imagen', 'retosCurso.categoriaReto.imagen')
            ->where('slug', $slug)->where('activado', true)->first();
        $categorias = [];

        if($curso)
        {
            foreach($curso->retosCurso As $reto)
            {
                $idCategoria = $reto->categoriaReto->id;
                $nombreCategoria = $reto->categoriaReto->nombre;
                $imagenCategoria = $reto->categoriaReto->imagen->path;

                $categorias[$idCategoria]['nombre'] = $nombreCategoria;
                $categorias[$idCategoria]['imagen'] = $imagenCategoria;
                $categorias[$idCategoria]['retos'][$reto->id] = $reto->nombre;
            }

            $curso->categorias = array_values($categorias);
            return $curso;
        }

        return false;
    }

    public function clasePorSlug($slug)
    {
        return false;
    }

}