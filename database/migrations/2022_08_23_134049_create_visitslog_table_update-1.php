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
        Schema::create('visitslog', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address');
            $table->string('visit_date');
            $table->string('visit_time');
            $table->string('visit_month');
            $table->string('visit_year');
            $table->string('user_agent');
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->string('region')->nullable();
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
        Schema::dropIfExists('visitslog');
    }
};
