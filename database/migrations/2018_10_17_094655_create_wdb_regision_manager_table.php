<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbRegisionManagerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_regision_manager', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('mobile', 50)->nullable();
			$table->string('name', 30)->nullable();
			$table->timestamps();
			$table->string('describe', 191)->nullable();
			$table->integer('company_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wdb_regision_manager');
	}

}
