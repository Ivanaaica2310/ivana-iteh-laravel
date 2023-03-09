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
        Schema::table('investicije', function (Blueprint $table) {
            $table->renameColumn('iznos', 'vrednost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investicije', function (Blueprint $table) {
            $table->renameColumn('vrednost', 'iznos');
        });
    }
};
