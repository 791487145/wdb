<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 40)->nullable()->comment('品牌名');
			$table->decimal('balance', 10)->nullable()->comment('余额');
			$table->integer('sms_num')->nullable()->comment('短信数目');
			$table->timestamps();
			$table->integer('status')->nullable()->default(1)->comment('1正常；2禁止');
			$table->string('category', 40)->nullable()->comment('类别');
			$table->integer('main_certification')->nullable()->default(0)->comment('主体认证0未1已认证');
			$table->string('district')->nullable()->comment('地址');
			$table->string('logo')->nullable();
			$table->string('telphone', 40)->nullable();
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
		Schema::drop('company');
	}

}
