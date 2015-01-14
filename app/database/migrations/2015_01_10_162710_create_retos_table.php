<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRetosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('retos', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nombre');
			$table->integer('tipo_reto_id')->unsigned()->default(1);
			$table->integer('leccion_id')->unsigned();
			$table->integer('profesor_id')->unsigned()->default(1);
			$table->mediumText('texto');
			$table->integer('imagen_id')->unsigned();
			$table->integer('video_id')->unsigned();
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
		Schema::drop('retos');
	}

}
