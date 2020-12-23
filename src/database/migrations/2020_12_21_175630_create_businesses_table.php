<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
			$table->string('business_type');
			$table->string('trading_name')->nullable();
			$table->string('registration_no')->nullable();
			$table->string('contact_no')->nullable();
			$table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('register_id')->nullable();
            $table->string('tax_no')->nullable();

			$table->UnsignedBiginteger('location_id')->nullable();
			$table->string('company_logo')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->integer('account_id')->nullable();
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
        Schema::dropIfExists('businesses');
    }
}
