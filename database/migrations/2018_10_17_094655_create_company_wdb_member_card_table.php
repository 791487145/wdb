<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompanyWdbMemberCardTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('company_wdb_member_card', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('company_id')->nullable();
			$table->integer('member_card_finish_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('company_wdb_member_card');
	}

}
