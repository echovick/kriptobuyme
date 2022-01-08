<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawalsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('withdrawals', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('amount')->unsigned()->nullable()->default(12);
			$table->string('address_details', 100)->nullable()->default('');
			$table->integer('withdrawal_method');
			$table->string('type', 100)->nullable()->default('');
			$table->string('status', 100)->nullable()->default('');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('withdrawals');
	}
}
