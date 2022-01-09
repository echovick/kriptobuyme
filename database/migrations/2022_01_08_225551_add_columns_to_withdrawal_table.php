<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToWithdrawalTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('withdrawals', function (Blueprint $table) {
			$table->string('reference_id', 100)->nullable()->default('');
			$table->float('charge')->nullable()->default(00.0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('withdrawals', function (Blueprint $table) {
			//
		});
	}
}
