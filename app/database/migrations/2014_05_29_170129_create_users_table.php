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
		    $table->string('profile_url', 20);
		    $table->string('password', 64);
		    $table->smallInteger('active');
		    $table->string('job_position', 25)->nullable();
		    $table->string('job_at', 25)->nullable();
		    $table->text('bio')->nullable();
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
