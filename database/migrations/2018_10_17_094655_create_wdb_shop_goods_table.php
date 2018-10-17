<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbShopGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_shop_goods', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('good_id')->nullable();
			$table->integer('shop_id')->nullable();
			$table->integer('status')->nullable()->default(1);
			$table->decimal('price', 10)->nullable();
			$table->integer('sale_num')->nullable();
			$table->integer('is_recomment')->nullable()->default(2)->comment('1tuijian2不推荐');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wdb_shop_goods');
	}

}
