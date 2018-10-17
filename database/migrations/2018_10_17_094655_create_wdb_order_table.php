<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_order', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('order_no')->nullable()->comment('订单编号');
			$table->integer('shop_assistant_id')->nullable()->comment('导购id');
			$table->integer('shop_id')->nullable()->comment('门店id');
			$table->string('member_name', 50)->nullable();
			$table->integer('member_id')->nullable()->comment('会员id');
			$table->integer('pay_way')->nullable()->comment('支付方式1支付宝2微信');
			$table->decimal('tracking_price', 10)->nullable()->comment('物流价格');
			$table->string('tracking_number')->nullable()->comment('物流单号');
			$table->integer('physical_way')->nullable()->comment('物流方式1自取2物流');
			$table->decimal('price', 10)->nullable()->comment('订单总价');
			$table->decimal('actual_payment', 10)->nullable()->comment('实付');
			$table->integer('use_integral')->nullable()->default(0)->comment('使用积分');
			$table->integer('order_category')->nullable()->comment('订单类型1普通订单；2积分兑换');
			$table->string('consignee_info')->nullable()->comment('收货人详细信息');
			$table->text('comment', 65535)->nullable()->comment('备注');
			$table->integer('status')->nullable()->default(1)->comment('1未支付；2代发货3待收货4完成10申请售后11拒绝售后12售后同意');
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
		Schema::drop('wdb_order');
	}

}
