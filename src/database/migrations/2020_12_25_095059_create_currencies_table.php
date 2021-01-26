<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->string('name');
            $table->string('code', 3)->nullable();
            $table->double('rate')->nullable();
            $table->string('precision',1)->nullable();
            $table->string('symbol',5)->nullable();
            $table->string('symbol_position', 10)->default('before');
            $table->string('decimal_mark',3)->nullable();
            $table->string('thousand_separator',3)->nullable();

            $table->boolean('enabled')->default(true);
            $table->boolean('default')->default(false);
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
        Schema::dropIfExists('currencies');
    }
}
