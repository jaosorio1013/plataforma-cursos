<?php namespace PlataformaCursos\Entities;


class Curso extends \Eloquent {

    protected $table = 'cursos';
    protected $fillable = [];
    protected $perPage = 8;

    public function imagen()
    {
        return $this->belongsTo('PlataformaCursos\Entities\Archivo');
    }

    public function retosCurso()
    {
        return $this->belongsToMany('PlataformaCursos\Entities\Reto', 'reto_curso', 'curso_id', 'reto_id');
    }

}