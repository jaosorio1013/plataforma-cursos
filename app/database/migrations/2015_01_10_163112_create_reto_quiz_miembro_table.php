<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use PlataformaCursos\Entities\RetoQuizMiembro;

class CreateRetoQuizMiembroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reto_quiz_miembro', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('reto_id')->index();
			$table->integer('curso_id')->index();
			$table->integer('miembro_id')->index();
			$table->boolean('activado')->default(false);

			$table->float('puntos');

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
		Schema::drop('reto_quiz_miembro');
	}

}
