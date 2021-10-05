<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->string('image')->nullable();
            $table->float('aggression');
            $table->float('general_priority');
            $table->float('defense');
            $table->float('evasiveness');
            $table->float('damage');
            $table->float('area_denial');
            $table->float('aerial_threat');
            $table->float('ranged_threat');
            $table->float('melee_threat');
            $table->float('weak_points');
            $table->float('speed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demons');
    }
}
