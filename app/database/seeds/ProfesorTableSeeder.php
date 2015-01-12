<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use PlataformaCursos\Entities\Profesor;
use PlataformaCursos\Entities\Archivo;

class ProfesorTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$imagen = Archivo::create([
				'tipo' => 'imagen',
				'path' => $faker->imageUrl($width = 640, $height = 480),
			]);

			$nombreProfesor = $faker->name;

			Profesor::create([
				'nombre' => $nombreProfesor,
				'slug' => \Str::slug($nombreProfesor),
				'avatar_id' => $imagen->id,
				'estado' => $faker->randomElement(['ofline', 'online']),
			]);
		}
	}

}