<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbRegisionManageShopTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_regision_manage_shop', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('regision_manage_id')->nullable();
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
		Schema::drop('wdb_regision_manage_shop');
	}

}
