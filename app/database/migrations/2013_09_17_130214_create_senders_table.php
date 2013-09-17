<?php

use Illuminate\Database\Migrations\Migration;

class CreateSendersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('senders', function($table)
		{
			$table->create();
			$table->increments('id');
			$table->integer('song_id');
			$table->string('nickname');
			$table->string('email');
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
		Schema::drop('senders');
	}

}