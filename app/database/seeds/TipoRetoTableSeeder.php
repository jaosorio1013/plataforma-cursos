<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use PlataformaCursos\Entities\TipoReto;
use PlataformaCursos\Entities\Archivo;

class TipoRetoTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$imagen = Archivo::create([
				'tipo' => 'imagen',
				'path' => $faker->imageUrl($width = 640, $height = 480),
			]);

			TipoReto::create([
				'nombre' => $faker->name,
				'imagen_id' => $imagen->id,
			]);
		}
	}

}