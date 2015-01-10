<?php namespace PlataformaCursos\Entities;


class Noticia extends \Eloquent {

    protected $table = 'noticias';
    protected $fillable = [];
    protected $perPage = 8;

}