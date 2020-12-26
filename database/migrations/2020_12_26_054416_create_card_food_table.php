<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardFoodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('card_food', function(Blueprint $table)
		{
			$table->integer('cart_food_id', true);
			$table->integer('card_id')->index('card_food_cart');
			$table->integer('food_id')->index('card_food_food');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('card_food');
	}

}
