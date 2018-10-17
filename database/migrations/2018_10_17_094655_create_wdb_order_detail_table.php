<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbOrderDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_order_detail', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('order_sn')->nullable();
			$table->integer('goods_id')->nullable()->comment('商品id');
			$table->integer('goods_ext_id')->nullable()->comment('商品种类id');
			$table->string('goods_detail')->nullable()->comment('商品详情');
			$table->decimal('unit_price', 10)->nullable()->comment('单价');
			$table->integer('number')->nullable()->comment('数量');
			$table->decimal('amount', 10)->nullable()->comment('总价');
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
		Schema::drop('wdb_order_detail');
	}

}
