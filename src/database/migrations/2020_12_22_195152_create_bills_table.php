<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->string('bill_number');
            $table->string('order_number')->nullable();
            $table->string('bill_status_code');
            $table->dateTime('billed_at');
            $table->dateTime('due_at');
            $table->double('amount', 15, 4);
            $table->string('currency_code');
            $table->double('currency_rate', 15, 8);
            $table->integer('category_id')->default(1);
            $table->integer('contact_id');
            $table->string('contact_name');
            $table->string('contact_email')->nullable();
            $table->string('contact_tax_number')->nullable();
            $table->string('contact_phone')->nullable();
            $table->text('contact_address')->nullable();
            $table->text('notes')->nullable();
            $table->integer('parent_id')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
        });

        Schema::create('bill_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->integer('bill_id');
            $table->string('status_code');
            $table->boolean('notify');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
            $table->foreign('bill_id')->cascadeOnDelete();
        });

        Schema::create('bill_items', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->integer('bill_id');
            $table->integer('item_id')->nullable();
            $table->string('name');
            $table->string('sku')->nullable();
            $table->double('quantity', 7, 2);
            $table->double('price', 15, 4);
            $table->double('total', 15, 4);
            $table->float('tax', 15, 4)->default('0.0000');
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
            $table->foreign('bill_id')->cascadeOnDelete();
        });

        Schema::create('bill_item_taxes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('business_id');
            $table->integer('bill_id');
            $table->integer('bill_item_id');
            $table->integer('tax_id');
            $table->string('name');
            $table->double('amount', 15, 4)->default('0.0000');
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
            $table->foreign('bill_id')->cascadeOnDelete();
        });

        Schema::create('bill_statuses', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->string('name');
            $table->string('code');
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
            $table->foreign('bill_id')->cascadeOnDelete();
        });

        Schema::create('bill_totals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('business_id');
            $table->integer('bill_id');
            $table->string('code')->nullable();
            $table->string('name');
            $table->double('amount', 15, 4);
            $table->integer('sort_order');
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
            $table->foreign('bill_id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
        Schema::dropIfExists('bill_histories');
        Schema::dropIfExists('bill_items');
        Schema::dropIfExists('bill_item_taxes');
        Schema::dropIfExists('bill_statuses');
        Schema::dropIfExists('bill_totals');
    }
}
