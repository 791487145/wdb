<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbMemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_member', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('openid')->nullable();
			$table->string('name')->nullable();
			$table->boolean('sex')->nullable();
			$table->string('phone')->nullable();
			$table->string('area')->nullable()->comment('地域');
			$table->boolean('sourcemanner')->nullable()->comment('来源渠道');
			$table->integer('buytimes')->nullable()->default(0)->comment('购次');
			$table->date('birthday')->nullable();
			$table->boolean('vipLV')->nullable()->default(0)->comment('会员等级');
			$table->integer('amount_score')->nullable()->default(0)->comment('总积分');
			$table->integer('score')->nullable()->default(0)->comment('会员可用积分');
			$table->decimal('amount', 10)->nullable()->comment('消费总金额');
			$table->integer('tag')->nullable()->comment('会员标签');
			$table->integer('totalcoupons')->nullable()->comment('优惠券总数量');
			$table->integer('totalcollection')->nullable()->comment('收藏总数量');
			$table->date('addtime')->nullable()->comment('增加时间');
			$table->date('modifytime')->nullable()->comment('修改时间');
			$table->integer('shopassistantid')->nullable()->comment('导购id');
			$table->integer('shopid')->nullable()->comment('店铺id');
			$table->string('head_img')->nullable();
			$table->integer('company_id')->nullable()->comment('企业id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wdb_member');
	}

}
