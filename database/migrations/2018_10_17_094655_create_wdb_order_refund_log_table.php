<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbOrderRefundLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_order_refund_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('status')->nullable();
			$table->string('order_no')->nullable();
			$table->string('refund_no')->nullable();
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
		Schema::drop('wdb_order_refund_log');
	}

}
