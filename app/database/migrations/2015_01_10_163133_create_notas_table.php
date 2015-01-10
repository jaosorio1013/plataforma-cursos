<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use PlataformaCursos\Entities\Nota;

class CreateNotasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nota');
			$table->integer('usuario_id')->unsigned();
			$table->integer('curso_id')->unsigned();

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
		Schema::drop('notas');
	}

}
