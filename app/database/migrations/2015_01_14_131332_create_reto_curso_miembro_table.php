<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRetoCursoMiembroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reto_curso_miembro', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('reto_curso_id')->unsigned();
			$table->integer('miembro_id')->unsigned();

			$table->boolean('visitado')->default(false);
			$table->boolean('aprobado')->default(false);
			$table->date('fecha_estimada');
			$table->date('fecha_aprobado')->nullable();

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
		Schema::drop('reto_curso_miembro');
	}

}
