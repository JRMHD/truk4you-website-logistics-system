<?php

// database/migrations/xxxx_xx_xx_create_email_alerts_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailAlertsTable extends Migration
{
    public function up()
    {
        Schema::create('email_alerts', function (Blueprint $table) {
            $table->id();
            $table->string('recipient');
            $table->text('message');
            $table->integer('frequency'); // Assuming you want to store the frequency in hours
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('email_alerts');
    }
}
