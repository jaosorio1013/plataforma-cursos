<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use PlataformaCursos\Entities\RetoCursoMiembro;
use PlataformaCursos\Entities\RetoCurso;

class RetoCursoMiembroTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$retosCurso = RetoCurso::where('curso_id', 1)->get();

			foreach($retosCurso AS $retoCurso)
			{
				RetoCursoMiembro::create([
					'reto_curso_id' => $retoCurso->id,
					'miembro_id' => 1
				]);
			}
		}

	}

}