<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title');
            $table->string('site_meta_keywords')->nullable();
            $table->string('site_meta_description')->nullable();
            $table->string('site_logo')->nullable();
			$table->string('time_zone')->nullable();
			$table->string('currency')->nullable();
			$table->string('currency_format')->nullable();
			$table->string('website')->nullable();
			$table->string('date_format')->nullable();
            $table->string('theme')->nullable();
            $table->integer('business_id')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
