<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogs', function($table)
		{
		    $table->increments('id');
		    $table->string('title');
		    $table->string('slug');
		    $table->text('featured_img');
		    $table->text('excerpt');
		    $table->text('content');
		    $table->text('l_version');
		    $table->text('status');
		    $table->integer('user_id');
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
		Schema::table('blogs', function($table)
		{
    		$table->dropIfExists('blogs');
		});
	}

}
