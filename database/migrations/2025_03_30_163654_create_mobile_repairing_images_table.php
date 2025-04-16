<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileRepairingImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_repairing_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mobile_repairings_id')->nullable();
            $table->text('mobile_images')->nullable();
            
            $table->foreign('mobile_repairings_id')->references('id')->on('mobile_repairings')->onDelete('set null'); 

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
        Schema::dropIfExists('mobile_repairing_images');
    }
}
