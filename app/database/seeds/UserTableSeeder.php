<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use PlataformaCursos\Entities\User;
use PlataformaCursos\Entities\Archivo;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$avatar = Archivo::create([
			'tipo' => 'imagen',
			'path' => $faker->imageUrl($width = 640, $height = 480),
		]);

		$nombreUsuario = 'Jhonata Osorio';

		User::create([
			'nombre' => $nombreUsuario,
			'slug' => \Str::slug($nombreUsuario),
			'email' => 'jaosorio1013@gmail.com',
			'password' => \Hash::make('123456'),
			'avatar_id' => $avatar->id,
			'activado' => true,
			'rol' => 'estudiante',
		]);

		#Administrador

		$faker = Faker::create();

		$avatar = Archivo::create([
			'tipo' => 'imagen',
			'path' => $faker->imageUrl($width = 640, $height = 480),
		]);

		$nombreUsuario = 'Admin';

		User::create([
			'nombre' => $nombreUsuario,
			'slug' => \Str::slug($nombreUsuario),
			'email' => 'admin',
			'password' => \Hash::make('123456'),
			'avatar_id' => $avatar->id,
			'activado' => true,
			'rol' => 'admin',
		]);
	}

}