<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use PlataformaCursos\Entities\Pregunta;

class CreatePreguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preguntas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('pregunta');
			$table->string('respuesta1');
			$table->string('respuesta2');
			$table->string('respuesta3');
			$table->string('respuesta4');
			$table->tinyInteger('respuesta_correcta')->default(1);

			$table->integer('quiz_id')->unsigned();

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
		Schema::drop('preguntas');
	}

}
