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
        Schema::create('employee_applications', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('name');
            $table->string('license');
            $table->date('expiration');
            $table->string('endorsements')->nullable();
            $table->enum('backgroundCheck', ['yes', 'no']);
            $table->text('workSchedule');
            $table->text('address');
            $table->string('phone');
            $table->string('email');
            $table->text('experience');
            $table->string('resumePath')->nullable(); // File path for the uploaded resume
            $table->enum('operatorType', ['ownerOperator', 'driver']);
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_applications');
    }
};
