<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrdersFoodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('orders_food', function(Blueprint $table)
		{
			$table->foreign('food_id', 'food_orders_food')->references('food_id')->on('food')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('order_id', 'orders_orders_food')->references('order_id')->on('orders')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('orders_food', function(Blueprint $table)
		{
			$table->dropForeign('food_orders_food');
			$table->dropForeign('orders_orders_food');
		});
	}

}
