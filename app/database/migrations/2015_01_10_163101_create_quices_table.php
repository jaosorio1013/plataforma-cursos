<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use PlataformaCursos\Entities\Quiz;

class CreateQuicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quices', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nombre');
			$table->float('minimo_puntaje');
			$table->string('mensaje_bienvenida');
			$table->string('mensaje_aprobo');
			$table->string('mensaje_reprobado');

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
		Schema::drop('quices');
	}

}
