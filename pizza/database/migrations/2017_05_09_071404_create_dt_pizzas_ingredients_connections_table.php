<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDtPizzasIngredientsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dt_pizzas_ingredients_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('pizzas_id', 36)->nullable()->index('fk_dt_pizzas_ingredients_connections_dt_pizzas_idx');
			$table->string('ingredients_id', 36)->nullable()->index('fk_dt_pizzas_ingredients_connections_dt_ingredients1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dt_pizzas_ingredients_connections');
	}

}
