<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminBankDetailsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_bank_details', function (Blueprint $table) {
			$table->increments('id');
			$table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
			$table->string('bank_name', 100)->nullable()->default('');
			$table->string('bank_address', 100)->nullable()->default('');
			$table->string('iban_code', 100)->nullable()->default('');
			$table->string('swift_code', 100)->nullable()->default('');
			$table->string('account_number', 100)->nullable()->default('');
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
		Schema::dropIfExists('admin_bank_details');
	}
}
