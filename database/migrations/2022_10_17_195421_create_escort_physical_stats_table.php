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
        Schema::create('escort_physical_stats', function (Blueprint $table) {
            $table->id();
            $table->integer('age');
            $table->integer('height');
            $table->integer('weight');
            $table->foreignId('ethnicity_id');
            $table->foreignId('booba_size_id');
            $table->foreignId('willing_to_escort_id');
            $table->foreignId('eye_color_id');
            $table->foreignId('hair_color_id');
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
        Schema::dropIfExists('escort_physical_stats');
    }
};
