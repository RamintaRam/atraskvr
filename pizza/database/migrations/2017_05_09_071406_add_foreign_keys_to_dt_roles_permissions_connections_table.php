<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDtRolesPermissionsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('dt_roles_permissions_connections', function(Blueprint $table)
		{
			$table->foreign('permissions_id', 'fk_dt_roles_permissions_connections_dt_permissions1')->references('id')->on('dt_permissions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('roles_id', 'fk_dt_roles_permissions_connections_dt_roles1')->references('id')->on('dt_roles')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('dt_roles_permissions_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_dt_roles_permissions_connections_dt_permissions1');
			$table->dropForeign('fk_dt_roles_permissions_connections_dt_roles1');
		});
	}

}
