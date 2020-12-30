<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('location_name');
			$table->string('address1')->nullable();
			$table->string('address2')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->integer('country')->nullable();
            $table->integer('zip')->nullable();
            // Location Head
            $table->integer('user_id')->nullable();
            $table->integer('business_id')->nullable();

            // Default Setup (Optional Use)
            $table->integer('default_account_id')->nullable();
            $table->integer('default_currency_id')->nullable();
            $table->integer('default_tax_id')->nullable();
            $table->integer('default_payment_mode_id')->nullable();

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
        Schema::dropIfExists('locations');
    }
}
