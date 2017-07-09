<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->text('text');
            $table->string('image');
            $table->boolean('active')->default('1');
            $table->integer('post_category_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('post_category_id')
                ->references('id')
                ->on('post_categories');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posts');
	}

}
