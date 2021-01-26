<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->text('description')->nullable();
            $table->double('sale_price', 15, 4);
            $table->double('purchase_price', 15, 4);
            $table->integer('quantity')->default(1);
            $table->integer('category_id')->nullable();
            $table->integer('tax_id')->nullable();
            $table->boolean('enabled')->default(1);

            $table->integer('business_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('business_id');
            $table->unique(['business_id', 'sku', 'deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
