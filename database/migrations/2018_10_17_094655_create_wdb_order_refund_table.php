<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbOrderRefundTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_order_refund', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('refund_no')->nullable()->comment('退款编号');
			$table->integer('member_id')->nullable()->comment('发起者');
			$table->string('order_no')->nullable()->comment('订单编号');
			$table->integer('refund_way')->nullable()->default(1)->comment('1仅退款；2退款退货');
			$table->decimal('refund_money', 10)->nullable()->comment('退款金额');
			$table->decimal('actual_refund_number', 10)->nullable()->comment('实际退款金额');
			$table->string('comment')->nullable()->comment('退款备注');
			$table->string('refund_file')->nullable()->comment('退款附件');
			$table->integer('status')->nullable()->default(1)->comment('状态1申请中2等待买家发货3拒绝4完成');
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
		Schema::drop('wdb_order_refund');
	}

}
