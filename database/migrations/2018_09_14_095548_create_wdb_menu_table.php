<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_menu', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 30)->nullable()->comment('名称');
			$table->integer('order')->nullable()->default(1)->comment('排序');
			$table->string('url', 100)->nullable()->comment('链接');
			$table->string('title', 20)->nullable()->comment('名称');
			$table->boolean('side')->nullable()->comment('层级');
			$table->integer('parent_id')->nullable();
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
		Schema::drop('wdb_menu');
	}

}
