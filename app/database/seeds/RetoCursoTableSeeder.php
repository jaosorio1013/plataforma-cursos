<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use PlataformaCursos\Entities\RetoCurso;

class RetoCursoTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$min = $faker->numberBetween(1, 20);
			$max = $faker->numberBetween(30, 50);

			foreach(range($min, $max) AS $indexRetoCurso)
			{
				RetoCurso::create([
					'reto_id' => $indexRetoCurso,
					'curso_id' => $index,
				]);
			}
		}
	}

}