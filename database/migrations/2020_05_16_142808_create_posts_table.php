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
            $table->string('name', 100);
            $table->string('description', 200);
            $table->text('content', 10000);
            $table->integer('category_id');
            $table->integer('series_id')->nullable();
            $table->integer('user_id');
            $table->string('seodescription', 150);
            $table->string('seokeywords', 150);
            $table->char('status')->default(1);
            $table->string('slug');
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
