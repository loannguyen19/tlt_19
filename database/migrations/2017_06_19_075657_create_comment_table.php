<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentTable extends Migration {

	public function up()
	{
		Schema::create('comment', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('post_id');
			$table->string('comment');
			$table->timestamp('create_at');
			$table->timestamp('update_at');
		});
	}

	public function down()
	{
		Schema::drop('comment');
	}
}