<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->longText('description');
			$table->boolean('active');
			$table->boolean('gift');
			$table->decimal('cost', 6, 2)->nullable();
			$table->date('event_date');
			$table->string('event_time');
			$table->string('eventbrite_url')->nullable();
			$table->string('background_image');
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
		Schema::drop('events');
	}

}
