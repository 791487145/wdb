<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbDegreeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_degree', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name')->nullable()->comment('名称');
			$table->string('bg_img')->nullable()->comment('背景图');
			$table->integer('experience')->nullable()->comment('升级积分');
			$table->integer('company_id')->nullable()->comment('企业id');
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
		Schema::drop('wdb_degree');
	}

}
