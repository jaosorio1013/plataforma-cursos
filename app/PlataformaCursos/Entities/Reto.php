<?php namespace PlataformaCursos\Entities;


class Reto extends \Eloquent {

    protected $table = 'retos';
    protected $fillable = [];
    protected $perPage = 8;

    public function cursosReto()
    {
        return $this->belongsToMany('PlataformaCursos\Entities\Curso', 'reto_curso', 'reto_id', 'curso_id');
    }

    public function leccion()
    {
        return $this->belongsTo('PlataformaCursos\Entities\Leccion');
    }

}