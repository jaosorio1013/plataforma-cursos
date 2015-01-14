<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use PlataformaCursos\Entities\Reto;

class RetoTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			Reto::create([
				'nombre' => $faker->name,
				'tipo_reto_id' => $faker->numberBetween($min = 1, $max = 10),
				'leccion_id' => $faker->numberBetween($min = 1, $max = 10),
				'profesor_id' => $faker->numberBetween($min = 1, $max = 10),
				'texto' => $faker->text(),
			]);
		}
	}

}