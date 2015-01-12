<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use PlataformaCursos\Entities\Profesor;

class CreateProfesoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesores', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nombre');
			$table->string('slug')->unique();
			$table->integer('avatar_id')->unsigned();
			$table->enum('estado', ['ofline', 'online']);

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
		Schema::drop('profesores');
	}

}
