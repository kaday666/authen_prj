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
            //first method to connect column with foregin key
            $table->foreignId('user_id')->constrained();
             //second method 
            // $table->foreignId('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->string('title');
            $table->string('image');
            $table->string('content_intro');
            $table->longText('content_body');
            $table->longText('content_footer');
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
