<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use PlataformaCursos\Entities\User;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nombre');
			$table->string('slug')->unique();
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('remember_token', 100)->nullable();
			$table->integer('avatar_id')->unsigned();
			$table->boolean('activado')->default(false);
			$table->enum('rol', ['admin', 'estudiante']);

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
		Schema::drop('users');
	}

}
