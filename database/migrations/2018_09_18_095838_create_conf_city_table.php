<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConfCityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conf_city', function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('name', 50);
			$table->string('zip_code', 10)->nullable()->default('0');
			$table->string('path', 50);
			$table->bigInteger('parent_id')->nullable()->default(0);
			$table->dateTime('created');
			$table->boolean('state')->nullable()->default(0)->index('idx1');
			$table->dateTime('updated_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('conf_city');
	}

}
