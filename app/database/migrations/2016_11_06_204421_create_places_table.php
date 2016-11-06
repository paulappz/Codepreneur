<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('places', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('area_id');
			$table->string('name');
			$table->string('road');
			$table->string('route');
			$table->integer('fair_price')->unsigned();
			$table->string('transport_mode');
			$table->string('way');
			$table->string('code');
			$table->string('duration');
			$table->foreign('area_id')->references('id')->on('areas');
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
		Schema::drop('places');
	}

}
