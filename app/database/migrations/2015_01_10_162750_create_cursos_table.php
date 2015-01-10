<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use PlataformaCursos\Entities\Curso;

class CreateCursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursos', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nombre');
			$table->string('slug')->unique();
			$table->float('valor')->unsigned();
			$table->integer('imagen_id')->unsigned();
			$table->integer('video_id')->unsigned();
			$table->boolean('activado')->default(false);

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
		Schema::drop('cursos');
	}

}
