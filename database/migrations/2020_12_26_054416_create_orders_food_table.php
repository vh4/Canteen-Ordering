<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersFoodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders_food', function(Blueprint $table)
		{
			$table->integer('id_orders_food', true);
			$table->integer('order_id')->index('orders_orders_food');
			$table->integer('food_id')->index('food_orders_food');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders_food');
	}

}
