<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbGoodsExtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_goods_ext', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('goods_ext_no', 50)->nullable();
			$table->string('goods_ext_name', 200)->nullable();
			$table->decimal('price', 10)->nullable()->comment('售价');
			$table->integer('repertory_num')->nullable()->comment('库存');
			$table->decimal('cost_price', 10)->nullable()->comment('成本价');
			$table->integer('sale_num')->nullable()->comment('销量');
			$table->timestamps();
			$table->integer('status')->nullable()->default(2)->comment('2下架1上架');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wdb_goods_ext');
	}

}
