<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('employee_code', 150);
            $table->string('fullname', 100);
            $table->string('phone', 36);
            $table->timestamp('contract_date_start', 0)->nullable();
            $table->timestamp('contract_date_end', 0)->nullable();
            $table->string('status', 36);
            $table->boolean('gender');
            $table->timestamp('birthday')->nullable();
            $table->smallInteger('day_off');
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
        Schema::dropIfExists('user__profiles');
    }
}
