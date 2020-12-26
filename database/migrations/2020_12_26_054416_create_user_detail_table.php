<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserDetailTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_detail', function(Blueprint $table)
		{
			$table->integer('user_detail_id', true);
			$table->integer('user_id')->index('user_detail_ibfk_1');
			$table->string('nama');
			$table->integer('no_pelajar');
			$table->string('email');
			$table->string('alamat');
			$table->string('password');
			$table->string('foto')->nullable()->default('NULL');
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
		Schema::drop('user_detail');
	}

}
