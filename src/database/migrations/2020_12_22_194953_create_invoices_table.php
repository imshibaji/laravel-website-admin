<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');

            $table->integer('contact_id');
            $table->string('contact_name');
            $table->string('contact_email')->nullable();
            $table->string('contact_tax_number')->nullable();
            $table->string('contact_phone')->nullable();
            $table->text('contact_address')->nullable();

            $table->string('invoice_number');
            $table->string('order_number')->nullable();
            $table->string('status');
            $table->dateTime('invoiced_at');
            $table->dateTime('due_at');
            $table->string('currency_code');
            $table->double('currency_rate', 15, 8);

            $table->double('subtotal_amount', 15, 4);
            $table->double('discount_percent', 5,2);
            $table->double('discount_amount', 15, 4);
            $table->double('total_tax_amt', 5,2);
            $table->double('round_up', 5,2);
            $table->double('total_amount', 15, 4);

            $table->text('notes')->nullable();
            $table->text('footer')->nullable();

            $table->integer('category_id')->default(1);
            $table->integer('parent_id')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
        });

        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->integer('invoice_id');
            $table->integer('item_id')->nullable();
            $table->string('name');
            $table->string('sku')->nullable();
            $table->double('quantity', 7, 2);
            $table->double('price', 15, 4);
            $table->double('taxprcnt', 15, 4)->default('0.0000');
            $table->double('taxamt', 15, 4)->default('0.0000');
            $table->double('total', 15, 4);
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
            $table->foreign('invoice_id')->cascadeOnDelete();
        });

        Schema::create('invoice_item_taxes', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->integer('invoice_id');
            $table->integer('invoice_item_id');
            $table->integer('tax_id');
            $table->string('name');
            $table->double('amount', 15, 4)->default('0.0000');
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
            $table->foreign('invoice_id')->cascadeOnDelete();
        });

        Schema::create('invoice_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('business_id');
            $table->integer('invoice_id');
            $table->string('status_code');
            $table->boolean('notify');
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
            $table->foreign('invoice_id')->cascadeOnDelete();
        });

        Schema::create('invoice_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('business_id');
            $table->integer('invoice_id');
            $table->string('name');
            $table->string('code');
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
            $table->foreign('invoice_id')->cascadeOnDelete();
        });

        Schema::create('invoice_totals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('business_id');
            $table->integer('invoice_id');
            $table->string('code')->nullable();
            $table->string('name');
            $table->double('amount', 15, 4);
            $table->integer('sort_order');
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
            $table->foreign('invoice_id')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('invoice_items');
        Schema::dropIfExists('invoice_item_taxes');
        Schema::dropIfExists('invoice_histories');
        Schema::dropIfExists('invoice_statuses');
        Schema::dropIfExists('invoice_totals');
    }
}
