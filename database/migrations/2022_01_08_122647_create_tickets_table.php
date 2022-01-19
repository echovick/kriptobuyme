<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tickets', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->string('priority', 100)->nullable()->default('');
			$table->string('ticket_id', 100)->nullable()->default('');
			$table->string('status', 100)->nullable()->default('Open');
			$table->string('subject', 100)->nullable()->default('');
			$table->longText('content')->nullable()->default('');
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
		Schema::dropIfExists('tickets');
	}
}
