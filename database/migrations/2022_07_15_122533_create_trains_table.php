<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency',50);
            $table->string('start_station',100);
            $table->string('end_station',100);
            $table->date('departure_time');
            $table->date('arrival_time');
            $table->tinyInteger('number_compartments');
            $table->boolean('in_time')->default(true);
            $table->boolean('deleted')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
