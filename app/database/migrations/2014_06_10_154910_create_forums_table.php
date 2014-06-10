<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forums', function($table)
		{
		    $table->increments('id');
		    $table->string('title');
		    $table->text('content');
		    $table->integer('user_id');
		    $table->string('status');
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
		Schema::table('forums', function($table)
		{
    		$table->dropIfExists('forums');
		});
	}

}
