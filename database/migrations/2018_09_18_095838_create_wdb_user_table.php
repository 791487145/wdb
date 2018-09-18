<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_user', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 20)->nullable()->comment('姓名');
			$table->string('nickname', 20)->nullable()->comment('昵称');
			$table->string('mobile', 20)->comment('手机号');
			$table->string('work_no', 40)->comment('工号');
			$table->integer('department_id')->nullable()->comment('部门');
			$table->integer('shop_id')->nullable()->comment('店铺');
			$table->string('password');
			$table->integer('sex')->nullable()->default(1)->comment('1:男0女');
			$table->integer('status')->nullable()->default(1)->comment('1正常；2禁止');
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
		Schema::drop('wdb_user');
	}

}
