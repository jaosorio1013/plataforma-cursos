<?php namespace PlataformaCursos\Entities;


class Curso extends \Eloquent {

    protected $table = 'cursos';
    protected $fillable = [];
    protected $perPage = 8;

}