<?php namespace PlataformaCursos\Entities;


class Pregunta extends \Eloquent {

    protected $table = 'preguntas';
    protected $fillable = [];
    protected $perPage = 8;

}