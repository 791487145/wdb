<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyWdbOrderRefundTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_wdb_order_refund', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('company_id')->nullable()->comment('公司id');
			$table->integer('order_refund_id')->nullable()->comment('退款id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_wdb_order_refund');
	}

}
