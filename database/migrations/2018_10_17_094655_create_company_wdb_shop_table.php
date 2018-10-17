<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyWdbShopTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_wdb_shop', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('company_id')->nullable();
			$table->integer('shop_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_wdb_shop');
	}

}
