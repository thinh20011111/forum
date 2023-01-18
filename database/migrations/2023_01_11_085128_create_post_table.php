<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->id();

            $table->string('user_id');
            $table->string('title');
            $table->string('type');
            $table->string('topic');
            $table->string('sub');
            $table->string('content');
            $table->string('images');
            $table->integer('number_like');
            $table->integer('number_comment');
            $table->integer('number_view');
            
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
        Schema::dropIfExists('post');
    }
};
