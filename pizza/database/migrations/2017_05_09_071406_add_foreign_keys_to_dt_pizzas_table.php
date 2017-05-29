<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDtPizzasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dt_pizzas', function(Blueprint $table)
		{
			$table->foreign('cheeses_id', 'fk_dt_pizzas_dt_cheeses1')->references('id')->on('dt_cheeses')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pads_id', 'fk_dt_pizzas_dt_pads1')->references('id')->on('dt_pads')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('user_id', 'fk_dt_pizzas_dt_users1')->references('id')->on('dt_users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dt_pizzas', function(Blueprint $table)
		{
			$table->dropForeign('fk_dt_pizzas_dt_cheeses1');
			$table->dropForeign('fk_dt_pizzas_dt_pads1');
			$table->dropForeign('fk_dt_pizzas_dt_users1');
		});
	}

}
