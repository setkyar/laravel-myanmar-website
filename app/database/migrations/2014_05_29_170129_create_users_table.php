<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
		    $table->increments('id');
		    $table->string('email', 35);
		    $table->string('username', 35);
		    $table->string('profile_url', 10);
		    $table->string('password', 64);
		    $table->smallInteger('active');
		    $table->text('bio');
		    $table->string('remember_token', 100)->nullable();
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
		Schema::table('users', function($table)
		{
    		$table->dropIfExists('users');
		});
	}

}
