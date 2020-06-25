<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name')->nullable();
            $table->text('content', 6000)->nullable();
            $table->string('description', 200)->nullable();
            $table->string('keywords', 200)->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('series_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->char('status', 1)->nullable();
            $table->string('slug', 255)->nullable();
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
        Schema::dropIfExists('posts');
    }
}
