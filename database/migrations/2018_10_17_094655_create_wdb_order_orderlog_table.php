<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbOrderOrderlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_order_orderlog', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('order_id')->nullable();
			$table->integer('order_log_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wdb_order_orderlog');
	}

}
