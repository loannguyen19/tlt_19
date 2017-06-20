<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->string('avatar');
			$table->string('email');
			$table->integer('role');
			$table->string('password');
			$table->timestamp('create_at');
			$table->timestamp('update_at');
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}