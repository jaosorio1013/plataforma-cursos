<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use PlataformaCursos\Entities\Leccion;
use PlataformaCursos\Entities\Archivo;

class LeccionTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			$imagen = Archivo::create([
				'tipo' => 'imagen',
				'path' => $faker->imageUrl($width = 640, $height = 480),
			]);

			Leccion::create([
				'nombre' => $faker->name,
				'imagen_id' => $imagen->id,
				'modulo_id' => $faker->numberBetween($min = 1, $max = 10),
			]);
		}
	}

}