<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('title');
            $table->mediumText('body');
            $table ->string('posted_by')->default('Kosi Eric');
            $table->bigInteger('number_of_views')->default(0)->comment('Number of times a post has been viewed');
            $table->bigInteger('number_of_reads')->default(0)->comment('Number of times a post has been read');
            $table->bigInteger('number_of_comments')->default(0)->comment('Number of comments a post has');
            $table->string('read_time')->default('1 min')->comment('Amount of time it takes to read a post');
            $table->bigInteger('number_of_edits')->default(0)->comment('Number of times a post has been edited');
            $table->mediumText('post_image')->default('logo.png')->comment('Post Image');
            $table->string('post_image_caption_text')->default(ucfirst(config('app.name').' logo'));
            $table->string('post_category')->default('Technology')->comment('The post blog post category');
            $table->string('post_sub_category')->default('Programming')->comment('The Post SubCategory');
            $table->string('tags')->default('PHP')->comment('The tags the post belongs to');
            $table->bigInteger('number_of_likes')->default(0)->comment('Number of likes a post has');
            $table->string('post_images')->default('')->comment('A comma separated list of blog post images names');
            $table->string('post_title_link')->default('link')->comment('A broken title link');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('posts');

    }
}
