<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEssayersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('essayers', function (Blueprint $table) {
            $table->id('id');
            $table->string('nom');
            $table->string('numero');
            $table->string('email')->unique();
            $table->string('pays');
            $table->string('profession');
            $table->string('raison');
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
        Schema::drop('essayers');
    }
}
