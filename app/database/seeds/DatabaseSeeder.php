<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CursoTableSeeder');
		$this->call('ModuloTableSeeder');
		$this->call('LeccionTableSeeder');
		$this->call('TipoRetoTableSeeder');
		$this->call('ProfesorTableSeeder');
		$this->call('RetoTableSeeder');
		$this->call('RetoCursoTableSeeder');

		$this->call('UserTableSeeder');
		$this->call('RetoCursoMiembroTableSeeder');
	}

}
