<?php

use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('songs', function($table)
		{
			$table->create();
			
			$table->increments('id');
			$table->string('song_name');
			$table->string('genre');
			$table->text('lyrics');
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
		Schema::drop('songs');
	}

}