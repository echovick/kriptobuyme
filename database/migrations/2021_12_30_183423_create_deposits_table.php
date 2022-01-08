<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deposits', function (Blueprint $table) {
			$table->increments('id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->string('reference_id', 100)->nullable()->default('');
			$table->float('amount')->nullable()->default(00.0);
			$table->foreign('deposit_method')->references('id')->on('deposit_methods')->onDelete('cascade');
			$table->float('deposit_charge')->nullable()->default(00.0);
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
		Schema::dropIfExists('deposits');
	}
}
