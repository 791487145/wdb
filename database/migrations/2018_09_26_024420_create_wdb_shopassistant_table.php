<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbShopassistantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_shopassistant', function(Blueprint $table)
		{
			$table->integer('assistantid', true)->comment('主键');
			$table->string('jobnumber')->nullable()->comment('工号');
			$table->string('assistantname')->nullable()->comment('员工姓名');
			$table->boolean('assistantsex')->nullable()->comment('性别');
			$table->integer('assistantage')->nullable()->comment('员工年龄');
			$table->string('assistantphone')->nullable()->comment('员工手机');
			$table->boolean('ifonjob')->nullable()->default(1)->comment('1在职  -1离职');
			$table->integer('departmentid')->nullable()->comment('部门id');
			$table->string('roleid')->nullable()->comment('角色id');
			$table->date('addtime')->nullable()->comment('入职时间');
			$table->integer('shopid')->nullable()->comment('店铺id');
			$table->string('openid', 11)->nullable()->comment('openid');
			$table->string('signature')->nullable()->comment('签名');
			$table->string('headphoto')->nullable()->comment('头像');
			$table->integer('fansnum')->nullable()->comment('粉丝总数');
			$table->integer('membernum')->nullable()->comment('会员总数');
			$table->decimal('totalsales', 10)->nullable()->comment('销售总额');
			$table->string('nickname')->nullable()->comment('昵称');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wdb_shopassistant');
	}

}
