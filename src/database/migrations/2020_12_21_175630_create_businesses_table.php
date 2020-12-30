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
            $table->string('name');
            $table->string('type');
			$table->string('trading_name')->nullable();
            $table->string('registration_no')->nullable();
            $table->string('tax_registration_no')->nullable();
			$table->string('contact_no')->nullable();
			$table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('is_active',3)->nullable();
            $table->string('default', 3)->nullable();

            // Default Settings
            $table->integer('default_location_id')->nullable();
            $table->integer('default_account_id')->nullable();
            $table->integer('default_currency_id')->nullable();
            $table->integer('default_tax_id')->nullable();
            $table->integer('default_payment_mode_id')->nullable();

            // Fiscal Year
            $table->string('year_starting_date', 10)->nullable();
            $table->string('time_zone', 10)->nullable();
            $table->string('date_format', 10)->nullable();
            $table->string('date_separator', 2)->nullable();
            $table->string('percent_position', 10)->nullable();
            $table->string('discount_location', 10)->nullable();


            // Invoice Setting
            $table->string('number_prefix')->default('INV-');
            $table->integer('number_digit')->default(5);
            $table->integer('next_number')->default(2);
            $table->string('payment_terms')->default('Due upon receipt');
            $table->string('title')->default('Invoice');
            $table->string('subheading')->nullable();
            $table->string('notes')->nullable();
            $table->string('footer')->nullable();
            $table->string('item_name')->default('items');
            $table->string('price_name')->default('price');
            $table->string('quantity_name')->default('Quantity');
            $table->string('template')->default('classic');

            // Scheduling setting
            $table->boolean('send_invoice_reminder')->default(false);
            $table->string('send_after_due_date')->default('1,3,5,10');

            $table->boolean('send_bill_reminder')->default(false);
            $table->string('send_before_due_date')->default('10,5,3,1');

            // $table->string('cron_command')->default('artisan schedule:run >> /dev/null 2>&1');
            $table->string('hour_to_run')->default('09:00');

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
