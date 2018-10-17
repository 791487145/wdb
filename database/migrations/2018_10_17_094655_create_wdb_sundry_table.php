<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbSundryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_sundry', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('sundryname')->nullable()->comment('名称');
			$table->string('sundrygroup')->nullable()->comment('组');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wdb_sundry');
	}

}
