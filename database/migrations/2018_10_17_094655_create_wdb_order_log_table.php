<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbOrderLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_order_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('order_no')->nullable();
			$table->integer('status')->nullable()->default(1)->comment('1');
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
		Schema::drop('wdb_order_log');
	}

}
