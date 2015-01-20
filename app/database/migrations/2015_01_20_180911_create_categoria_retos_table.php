<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriaRetosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categoria_retos', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nombre');
			$table->mediumText('descripcion');
			$table->integer('imagen_id')->unsigned();
			$table->boolean('activado')->default(true);

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
		Schema::drop('categoria_retos');
	}

}
