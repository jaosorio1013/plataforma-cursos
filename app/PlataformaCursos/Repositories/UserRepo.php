<?php namespace PlataformaCursos\Repositories;

use PlataformaCursos\Entities\User;

class UserRepo extends BaseRepo {

    public function getModel()
    {
        return new User;
    }

}