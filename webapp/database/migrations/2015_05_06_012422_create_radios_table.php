<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRadiosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('radios', function(Blueprint $table)
		{
			$table->string('id', 40);
			$table->string('name', 40);
			$table->string('address', 60);
			$table->string('slogan', 255);
			$table->string('logo_url', 255);
			$table->string('email', 60);
			$table->string('telephone', 14);
			$table->string('youtube', 255);
			$table->string('facebook', 255);
			$table->string('twitter',255);
			$table->string('instagram', 255);
			$table->string('streaming_url',255);
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
		Schema::table('radios', function(Blueprint $table)
		{
			Schema::drop('radios');
		});
	}

}
