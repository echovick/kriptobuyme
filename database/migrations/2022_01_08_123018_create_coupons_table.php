<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('coupons', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('admin_id')->unsigned();
			$table->string('coupon_code', 100)->nullable()->default('');
			$table->float('percentage_off')->nullable()->default(00.0);
			$table->string('status', 100)->nullable()->default('');
			$table->timestamps();

			$table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('coupons');
	}
}
