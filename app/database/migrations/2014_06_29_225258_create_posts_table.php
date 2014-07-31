<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('posts', function($table)
	    {
	        $table->increments('id');
			$table->string('name');
			$table->integer('user_id');
			$table->integer('course_id');
			$table->longText('content');
			$table->string('tags');
			$table->softDeletes();
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
		Schema::drop('posts');
	}

}
