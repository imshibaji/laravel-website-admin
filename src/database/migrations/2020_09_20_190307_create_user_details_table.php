<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('address')->nullable();
            $table->string('contact_no',15)->nullable();
            $table->string('whatsapp_no',15)->nullable();
            $table->string('skype_id',20)->nullable();
			$table->string('last_login_ip',32)->nullable();
            $table->timestampTz('last_login_date','2')->nullable();
            $table->tinyInteger('is_active')->default(0);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->dropColumn('is_active');
            $table->dropColumn('address');
            $table->dropColumn('contact_no');
            $table->dropColumn('whatsapp_no');
            $table->dropColumn('skype_id');
			$table->dropColumn('last_login_ip');
            $table->dropColumn('last_login_date');
            $table->dropSoftDeletes();
        });
    }
}
