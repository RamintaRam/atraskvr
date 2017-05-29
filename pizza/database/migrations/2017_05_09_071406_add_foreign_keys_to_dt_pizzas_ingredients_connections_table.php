<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDtPizzasIngredientsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dt_pizzas_ingredients_connections', function(Blueprint $table)
		{
			$table->foreign('ingredients_id', 'fk_dt_pizzas_ingredients_connections_dt_ingredients1')->references('id')->on('dt_ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pizzas_id', 'fk_dt_pizzas_ingredients_connections_dt_pizzas')->references('id')->on('dt_pizzas')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dt_pizzas_ingredients_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_dt_pizzas_ingredients_connections_dt_ingredients1');
			$table->dropForeign('fk_dt_pizzas_ingredients_connections_dt_pizzas');
		});
	}

}
