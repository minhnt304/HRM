<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDayOffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_offs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 100);
            $table->string('po_name');
            $table->timestamp('vacation_day_from')->nullable();
            $table->timestamp('vacation_day_to')->nullable();
            $table->string('datetime', 36);
            $table->string('vaction_type', 36);
            $table->string('reason', 150);
            $table->string('note', 100);
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
        Schema::dropIfExists('day_offs');
    }
}
