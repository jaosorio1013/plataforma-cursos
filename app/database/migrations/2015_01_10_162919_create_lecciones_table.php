<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use PlataformaCursos\Entities\Leccion;

class CreateLeccionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lecciones', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nombre');
			$table->integer('imagen_id')->unsigned();
			$table->integer('modulo_id')->unsigned();

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lecciones');
	}

}
