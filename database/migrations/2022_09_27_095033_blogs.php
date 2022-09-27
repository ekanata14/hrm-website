<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blogs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('title');
            $table->string('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('Blogs');
    }
}
