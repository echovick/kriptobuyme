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
			$table->string('fixed_charge_amount', 100)->nullable()->default('text');
			$table->string('percentage_charge', 100)->nullable()->default('text');
			$table->string('status', 100)->nullable()->default('text');
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
