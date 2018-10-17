<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbGoodsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_goods', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 150)->nullable()->comment('商品名');
			$table->string('goods_no', 50)->nullable()->comment('编号');
			$table->integer('sale_num')->default(0)->comment('总销量');
			$table->string('goods_describe')->nullable()->comment('商品描述、卖点');
			$table->string('thumbnail_pic')->nullable()->comment('缩略图');
			$table->integer('group_id')->nullable()->comment('分组');
			$table->integer('category_id')->nullable()->comment('分类');
			$table->integer('data_time')->nullable()->comment('上架时间');
			$table->integer('data_status')->nullable()->default(1)->comment('1立即上架；2自定义');
			$table->timestamps();
			$table->text('goods_detail', 65535)->nullable()->comment('商品详情');
			$table->integer('integral_status')->nullable()->default(1)->comment('积分抵扣1shi2fou');
			$table->decimal('price', 10)->nullable()->comment('价格');
			$table->integer('repertory_num')->nullable()->comment('库存');
			$table->decimal('line_price', 10)->nullable()->comment('划线价');
			$table->integer('status')->nullable()->default(2)->comment('1上架2下架');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wdb_goods');
	}

}
