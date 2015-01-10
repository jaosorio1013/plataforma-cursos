<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRespuestaPreguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('respuesta_preguntas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('reformulacion_pregunta', 200)->nullable();
			$table->string('respuesta', 250);
			$table->integer('pregunta_id')->unsigned();
			$table->boolean('publica');

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
		Schema::drop('respuesta_preguntas');
	}

}
