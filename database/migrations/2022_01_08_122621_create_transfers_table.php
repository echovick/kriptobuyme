<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transfers', function (Blueprint $table) {
			$table->increments('id');
			$table->string('reference_id', 100)->nullable()->default('text');
			$table->integer('sender_id');
			$table->integer('receiver_id');
			$table->float('amount')->nullable()->default(00.0);
			$table->float('charge')->nullable()->default(00.0);
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
		Schema::dropIfExists('transfers');
	}
}
