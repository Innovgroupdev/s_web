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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id('id');
            $table->string('description');
            $table->string('name');
            $table->string('email');
            $table->boolean('is_valid');
            $table->integer('article_id')->unsigned();
            $table->softDeletes();
            $table->foreign('article_id')->references('id')->on('articles');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comm');
    }
};