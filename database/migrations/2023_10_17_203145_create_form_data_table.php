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
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('pickupLocation');
            $table->datetime('pickupDateTime');
            $table->string('deliveryLocation');
            $table->datetime('deliveryDateTime');
            $table->string('equipmentType');
            $table->string('loadType');
            $table->string('loadDimensions');
            $table->text('commodityDescription');
            $table->string('contactName');
            $table->string('contactPhone');
            $table->string('contactEmail');
            $table->string('loadDocPath')->nullable();
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
        Schema::dropIfExists('form_data');
    }
};
