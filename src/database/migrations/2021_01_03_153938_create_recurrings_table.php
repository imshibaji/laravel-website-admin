<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurrings', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->morphs('recurable');
            $table->string('frequency');
            $table->integer('interval')->default(1);
            $table->dateTime('started_at');
            $table->integer('count')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurrings');
    }
}
