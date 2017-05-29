<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDtPizzasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dt_pizzas', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('pads_id', 36)->index('fk_dt_pizzas_dt_pads1_idx');
			$table->string('cheeses_id', 36)->index('fk_dt_pizzas_dt_cheeses1_idx');
			$table->string('user_id', 36)->nullable()->index('fk_dt_pizzas_dt_users1_idx');
			$table->string('name');
			$table->integer('calories');
			$table->string('comment')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dt_pizzas');
	}

}
