<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbGoodsGoodsExtTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_goods_goods_ext', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('goods_id')->nullable();
			$table->integer('goods_ext_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wdb_goods_goods_ext');
	}

}
