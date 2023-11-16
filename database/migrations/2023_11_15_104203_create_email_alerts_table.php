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
    // database/migrations/YYYY_MM_DD_create_email_alerts_table.php

    public function up()
    {
        Schema::table('email_alerts', function (Blueprint $table) {
            $table->enum('frequency', ['4', '8', '24'])->default('4');
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_alerts');
    }
};
