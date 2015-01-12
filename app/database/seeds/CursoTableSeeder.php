<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use PlataformaCursos\Entities\Curso;
use PlataformaCursos\Entities\Archivo;

class CursoTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$imagen = Archivo::create([
				'tipo' => 'imagen',
				'path' => $faker->imageUrl($width = 640, $height = 480),
			]);

			$video = Archivo::create([
				'tipo' => 'imagen',
				'path' => 'https://www.youtube.com/watch?v=sSDh1zfz-5s',
			]);

			$nombreCurso = $faker->name;

			Curso::create([
				'nombre' => $nombreCurso,
				'slug' => \Str::slug($nombreCurso),
				'valor' => $faker->randomFloat($decimals = 2, $min = 20, $max = 50),
				'imagen_id' => $imagen->id,
				'video_id' => $video->id,
				'activado' => $faker->randomElement([true, false]),
			]);
		}
	}

}