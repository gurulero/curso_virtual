<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModuleContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('modules_contents', function($table)
	    {
	        $table->increments('id');
			$table->integer('module_id');
	        $table->string('name');
			$table->string('type');
			$table->string('url');
			$table->longText('description');
			$table->string('tags');
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
		Schema::drop('modules_contents');
	}

}
