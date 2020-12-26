<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCardFoodTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('card_food', function(Blueprint $table)
		{
			$table->foreign('card_id', 'card_food_cart')->references('card_id')->on('cart')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('food_id', 'card_food_food')->references('food_id')->on('food')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('card_food', function(Blueprint $table)
		{
			$table->dropForeign('card_food_cart');
			$table->dropForeign('card_food_food');
		});
	}

}
