<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogArticlesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blog_articles', function (Blueprint $table) {
			$table->increments('id');
			$table->string('blog_title', 100)->nullable()->default('');
			$table->integer('category_id')->unsigned();
			$table->integer('views')->unsigned()->nullable()->default(0);
			$table->string('status', 100)->nullable()->default('Published');
			$table->timestamps();

			$table->foreign('category_id')->references('id')->on('article_categories')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('blog_articles');
	}
}
