<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoOptimizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_optimizations', function (Blueprint $table) {
            $table->id();

            $table->string('url')->nullable();

            // Search Engine Tags
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_robots')->nullable();
            $table->string('meta_revisited_after')->nullable();
            $table->string('meta_language')->nullable();
            $table->string('meta_author')->nullable();

            // Facebook & Social Media Linking Tags
            $table->string('meta_og_url')->nullable();
            $table->string('meta_og_title')->nullable();
            $table->string('meta_og_keywords')->nullable();
            $table->string('meta_og_description')->nullable();
            $table->string('meta_og_site_name')->nullable();
            $table->string('meta_og_local')->nullable();
            $table->string('meta_og_image')->nullable();
            $table->string('meta_og_video')->nullable();
            $table->string('meta_og_type')->nullable();

            // Facebook Only
            $table->string('meta_fb_admins')->nullable();
            $table->string('meta_fb_app_id')->nullable();

            //Twitter
            $table->string('meta_twitter_card')->nullable();
            $table->string('meta_twitter_title')->nullable();
            $table->string('meta_twitter_keywords')->nullable();
            $table->string('meta_twitter_description')->nullable();
            $table->string('meta_twitter_site')->nullable();
            $table->string('meta_twitter_creator')->nullable();
            $table->string('meta_twitter_image_src')->nullable();
            $table->string('meta_twitter_player')->nullable();

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
        Schema::dropIfExists('seo_optimizations');
    }
}
