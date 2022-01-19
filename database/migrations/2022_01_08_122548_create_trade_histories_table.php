<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeHistoriesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trade_histories', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('reference_id', 100)->nullable()->default('');
			$table->float('amount')->nullable()->default(00.0);
			$table->integer('plan_id');
			$table->float('daily_percentage')->nullable()->default(00.0);
			$table->integer('trade_duration')->unsigned()->nullable()->default(0);
			$table->float('trade_profit')->nullable()->default(00.0);
			$table->string('trade_source', 100)->nullable()->default('');
			$table->float('trade_bonus')->nullable()->default('');
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
		Schema::dropIfExists('trade_histories');
	}
}
