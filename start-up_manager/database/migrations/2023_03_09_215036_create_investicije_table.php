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
        Schema::create('investicije', function (Blueprint $table) {
            $table->id();
            $table->integer('iznos');
            $table->string('kredit');
            $table->foreignId('investitor_id')->constrained('investitori');
            $table->foreignId('startup_id')->constrained('startups');
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
        Schema::dropIfExists('investicije');
    }
};
