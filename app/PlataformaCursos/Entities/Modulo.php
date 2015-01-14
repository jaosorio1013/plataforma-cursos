<?php namespace PlataformaCursos\Entities;


class Modulo extends \Eloquent {

    protected $table = 'modulos';
    protected $fillable = [];
    protected $perPage = 8;

    public function imagen()
    {
        return $this->belongsTo('PlataformaCursos\Entities\Archivo');
    }

}