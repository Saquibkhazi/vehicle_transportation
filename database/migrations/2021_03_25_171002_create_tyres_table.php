<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTyresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tyres', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('srn',155);
            $table->string('tyreno',155)->nullable();
            $table->string('model',155)->nullable();
            $table->string('status',155)->nullable();
            $table->string('condition',155)->nullable();
            $table->string('type',155)->nullable();
            $table->decimal('amount',65)->nullable();
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
        Schema::dropIfExists('tyres');
    }
}
