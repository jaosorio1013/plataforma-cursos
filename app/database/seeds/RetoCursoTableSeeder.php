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
			$min = $faker->numberBetween(1, 40);
			$max = $faker->numberBetween(60, 100);

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