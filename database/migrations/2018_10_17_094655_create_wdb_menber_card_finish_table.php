<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbMenberCardFinishTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_menber_card_finish', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('bg_img')->nullable()->comment('会员卡背景');
			$table->integer('lever_status')->nullable()->default(1)->comment('1显示2不显示等级');
			$table->integer('member_number_status')->nullable()->default(1)->comment('1会员卡号');
			$table->string('function_status', 20)->nullable()->default('')->comment('功能模块1积分2储值3卡券');
			$table->integer('qr_code')->nullable()->default(1)->comment('1显示2不显示二维码');
			$table->integer('right_status')->nullable()->default(1)->comment('1显示2不显示权益展示');
			$table->integer('style_page')->nullable()->default(1)->comment('页面风格1经典2九宫格');
			$table->integer('wy_order')->nullable()->default(1)->comment('我的喜欢1展示');
			$table->integer('wy_order_ico')->nullable()->comment('图标');
			$table->integer('wy_love')->nullable();
			$table->integer('wy_love_ico')->nullable();
			$table->integer('medicine_question')->nullable();
			$table->integer('medicine_question_ico')->nullable();
			$table->integer('my_data')->nullable();
			$table->string('my_data_ico')->nullable();
			$table->integer('invite_price')->nullable();
			$table->string('invite_price_ico')->nullable();
			$table->integer('all_shop')->nullable();
			$table->string('all_shop_ico')->nullable();
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
		Schema::drop('wdb_menber_card_finish');
	}

}
