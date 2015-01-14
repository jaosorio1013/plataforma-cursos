<?php namespace PlataformaCursos\Entities;


class Leccion extends \Eloquent {

    protected $table = 'lecciones';
    protected $fillable = [];
    protected $perPage = 8;

    public function modulo()
    {
        return $this->belongsTo('PlataformaCursos\Entities\Modulo');
    }

}