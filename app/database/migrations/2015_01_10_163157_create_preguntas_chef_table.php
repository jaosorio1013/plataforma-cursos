<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use PlataformaCursos\Entities\PreguntaChef;

class CreatePreguntasChefTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('preguntas_chef', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('usuario_id')->unsigned();
			$table->integer('profesor_id')->unsigned();
			$table->string('pregunta', 200);

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
		Schema::drop('preguntas_chef');
	}

}
