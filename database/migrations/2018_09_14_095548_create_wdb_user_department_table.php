<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWdbUserDepartmentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wdb_user_department', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('department_id')->nullable();
			$table->integer('wdbuser_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wdb_user_department');
	}

}
