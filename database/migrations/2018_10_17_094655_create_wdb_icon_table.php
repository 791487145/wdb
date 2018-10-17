<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbIconTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_icon', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('category', 20)->nullable();
			$table->string('icon')->nullable();
			$table->string('comment')->nullable()->comment('备注');
			$table->integer('company_id')->nullable()->comment('企业id');
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
		Schema::drop('wdb_icon');
	}

}
