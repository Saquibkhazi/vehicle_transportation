<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->date('date')->nullable();
            $table->string('source',155)->nullable();
            $table->string('destination',155)->nullable();            
            $table->string('distance',155)->nullable();
            $table->string('tareweight',155)->nullable();
            $table->string('netweight',155)->nullable();
            $table->string('grossweight',155)->nullable();
            $table->bigInteger('driver_id')->unsigned();
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->bigInteger('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
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
        Schema::dropIfExists('trips');
    }
}
