<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use PlataformaCursos\Entities\CategoriaReto;
use PlataformaCursos\Entities\Archivo;

class CategoriaRetoTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$imagen = Archivo::create([
				'tipo' => 'imagen',
				'path' => $faker->imageUrl($width = 640, $height = 480),
			]);

			CategoriaReto::create([
				'nombre' => $faker->name,
				'descripcion' => $faker->text(),
				'imagen_id' => $imagen->id,
				'activado' => $faker->randomElement([true, false]),
			]);
		}
	}

}