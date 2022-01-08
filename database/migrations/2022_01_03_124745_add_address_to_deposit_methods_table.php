<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressToDepositMethodsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('deposit_methods', function (Blueprint $table) {
			$table->string('method_address', 100)->nullable()->default('text');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('deposit_methods', function (Blueprint $table) {
			$table->dropColumn('method_address');
		});
	}
}
