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
			$table->integer('id')->primary();
			$table->string('name', 40)->nullable();
			$table->decimal('balance', 10)->nullable();
			$table->integer('sms_num')->nullable();
			$table->timestamps();
			$table->integer('status')->nullable()->default(1)->comment('1正常；2禁止');
			$table->string('title')->nullable();
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
