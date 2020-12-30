<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('details');
            $table->string('icon', 10)->nullable();
            $table->string('color',10)->nullable();

            // Notification for
            $table->integer('user_id')->nullable();
            $table->string('role_name')->nullable();
            $table->json('seens')->nullable();

            $table->string('notify_for')->default('all');
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
        Schema::dropIfExists('notifies');
    }
}
