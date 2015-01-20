<?php namespace PlataformaCursos\Entities;


class CategoriaReto extends \Eloquent {

    protected $table = 'categoria_retos';
    protected $fillable = [];
    protected $perPage = 8;

    public function imagen()
    {
        return $this->belongsTo('PlataformaCursos\Entities\Archivo');
    }

}