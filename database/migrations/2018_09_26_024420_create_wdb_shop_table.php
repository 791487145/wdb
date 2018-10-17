<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbShopTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_shop', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 70)->nullable();
			$table->string('describe')->nullable()->comment('描述');
			$table->integer('level')->nullable()->comment('等级');
			$table->string('experice')->nullable()->comment('经验');
			$table->string('fix_phone', 20)->nullable()->comment('固话');
			$table->string('lon_lati', 120)->nullable()->comment('经纬度');
			$table->integer('shop_no')->nullable()->comment('门店编码');
			$table->string('district', 100)->nullable()->comment('区域');
			$table->text('instro', 65535)->nullable()->comment('要求');
			$table->string('logo')->nullable()->comment('店铺logo');
			$table->boolean('status')->nullable()->default(1)->comment('1正常2禁用');
			$table->integer('is_recommend')->nullable()->default(0)->comment('0不推荐1推荐');
			$table->string('bg_img')->nullable()->comment('背景图');
			$table->timestamps();
			$table->string('good_comment', 20)->nullable()->comment('好评率');
			$table->integer('sale_num')->nullable()->comment('营销量');
			$table->decimal('sale_money', 10)->nullable()->comment('营业额');
			$table->string('seo', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wdb_shop');
	}

}
