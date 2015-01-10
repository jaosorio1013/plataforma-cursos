<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use PlataformaCursos\Entities\Archivo;

class CreateArchivosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('archivos', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('path')->unique();
			$table->enum('tipo', ['archivo', 'imagen', 'video']);

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
		Schema::drop('archivos');
	}

}
