<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostsTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('title', 100);
			$table->string('content');
			$table->timestamp('create_at');
			$table->timestamp('update_at');
		});
	}

	public function down()
	{
		Schema::drop('posts');
	}
}