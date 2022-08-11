<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
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
            $table->string('email')->unique();
            $table->boolean('is_valid');
            $table->integer('article_id')->unsigned();
            $table->softDeletes();
            $table->foreign('article_id')->references('id')->on('articles');
            $table->timestamps();
        });
    }


}