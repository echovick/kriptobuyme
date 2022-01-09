<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositMethodsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deposit_methods', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100)->nullable()->default('text');
			$table->string('display_name', 100)->nullable()->default('text');
			$table->integer('min')->unsigned()->nullable()->default(12);
			$table->integer('max')->unsigned()->nullable()->default(12);
			$table->float('fixed_charge_amount')->nullable()->default(00.0);
			$table->float('percentage_charge')->nullable()->default(00.0);
			$table->string('status', 100)->nullable()->default('Active');
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
		Schema::dropIfExists('deposit_methods');
	}
}
