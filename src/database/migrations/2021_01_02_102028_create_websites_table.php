<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->id();
            $table->integer('business_id');
            $table->string('website')->nullable();
            $table->string('analytics_id')->nullable();

            $table->string('site_title');
            $table->string('site_meta_keywords')->nullable();
            $table->string('site_meta_description')->nullable();
            $table->string('site_logo')->nullable();
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
        Schema::dropIfExists('websites');
    }
}
